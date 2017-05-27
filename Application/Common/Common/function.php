<?php
//获取access_token
//返回新的access_token
function get_access_token(){
  //1.请求url地址
  $appid = C('WX_APPID');
  $appsecret =  C('WX_APPSECRET');
  $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
  //2初始化
  $ch = curl_init();
  //3.设置参数
  curl_setopt($ch , CURLOPT_URL, $url);
  curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
  //4.调用接口
  $res = curl_exec($ch);
  //5.关闭curl
  curl_close( $ch );
  if( curl_errno($ch) ){
    var_dump( curl_error($ch) );
  }
  $arr = json_decode($res, true);
  //var_dump( $arr );
  return $arr['access_token'];
  //return $appid.$appsecret;
}

//添加菜单
//$menu json字符串（菜单）
//返回创建菜单结果（失败/成功）
function add_menu($menu=null,$access_token=null){
  $url='https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$access_token;
  $ch=curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$menu);
  $re = curl_exec($ch);
  $res=json_decode($re,true);
  if($res['errcode']==0 && $res['errmsg']=='ok'){
    $rt['success']=true;
    $rt['errmsg']=$res['errmsg'];
  }else{
    $rt['success']=false;
    $rt['errmsg']=$res['errmsg'];
  }
  return $rt;
}

//验证码验证函数
function check_verify($code, $id = ''){
  $verify = new \Think\Verify();
  return $verify->check($code, $id);
}

/*
*功能：对字符串进行加密处理
*参数一：需要加密的内容
*参数二：密钥
*/
function passport_encrypt($str,$key){ //加密函数
   srand((double)microtime() * 1000000);
   $encrypt_key=md5(rand(0, 32000));
   $ctr=0;
   $tmp='';
   for($i=0;$i<strlen($str);$i++){
    $ctr=$ctr==strlen($encrypt_key)?0:$ctr;
    $tmp.=$encrypt_key[$ctr].($str[$i] ^ $encrypt_key[$ctr++]);
   }
   return base64_encode(passport_key($tmp,$key));
}

/*
*功能：对字符串进行解密处理
*参数一：需要解密的密文
*参数二：密钥
*/
function passport_decrypt($str,$key){ //解密函数
   $str=passport_key(base64_decode($str),$key);
   $tmp='';
   for($i=0;$i<strlen($str);$i++){
    $md5=$str[$i];
    $tmp.=$str[++$i] ^ $md5;
   }
   return $tmp;
}

/*
*辅助函数
*/
function passport_key($str,$encrypt_key){
   $encrypt_key=md5($encrypt_key);
   $ctr=0;
   $tmp='';
   for($i=0;$i<strlen($str);$i++){
    $ctr=$ctr==strlen($encrypt_key)?0:$ctr;
    $tmp.=$str[$i] ^ $encrypt_key[$ctr++];
   }
   return $tmp;
}


/*
*功能：生成随机验证码
*参数一：要生成的验证码的位数
*/
function rand_number($num=5)
{
    $result='';
    for($i=0;$i<$num;$i++){
      $result.=rand(0,9);
    }
    return $result;
}

//jsonp放回数据
function getArray($errorcode,$message='',$data=''){
	$result=array(
			'message'=>$message,
			'data'=>$data,
			'errorcode'=>$errorcode,
	);
	return $result;
}

//获取ip
function get_real_ip() {
    $ip = false;
    if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode(", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
        if ($ip) {
            array_unshift($ips, $ip);
            $ip = FALSE;
        }
        for ($i = 0; $i < count($ips); $i++) {
            if (!eregi("^(10|172\.16|192\.168)\.", $ips[$i])) {
                $ip = $ips[$i];
                break;
            }
        }
    }
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}

/*
  搜索小字符串在整个字符串中的位置
  $str 整个字符串
  $start 从整个字符串的指定位置开始搜索字符串
  $str_search 要搜索的字符串
  返回搜索的字符串的长度和字符串首次出现的位置
*/
function search_str($str,$start,$str_search){
  $res['str_len']=strlen($str_search);
  $res['str_in']=stripos($str,$str_search,$start);
  return $res;
}

/*
  删除两个字符串间的字符串
  $str 整个字符串
  $start_str 开始字符串
  $end_str 结束字符串
  返回处理后的字符串
*/
function deletestr($str,$start_str,$end_str){
  $start_in=stripos($str,$start_str,0);
  $end_in=stripos($str,$end_str,0);
  $end_str_len=strlen($end_str);
  $delete_str=substr($str,$start_in,$end_in-$start_in+$end_str_len);
  $result_str=str_replace($delete_str,'',$str);
  return $result_str;
}

/*
  截取两个字符串间的字符
  $str 整个字符串
  $start_str 开始的字符串
  $end_str 结束的字符串
  返回截取的字符串
*/
function str_between($str,$start_str,$end_str){
  $start_str_len=strlen($start_str);
  $start_in=stripos($str,$start_str,0);
  $end_in=stripos($str,$end_str,0);
  $result_str=substr($str,$start_in+$start_str_len,$end_in-($start_in+$start_str_len));
  return $result_str;
}


?>
