<?php
// for ($i=100; $i < 1000; $i++) {
//   $a=intval($i/100);
//   $b=intval(($i-$a*100)/10);
//   $c=intval($i-$a*100-$b*10);
//   if($a*$a*$a+$b*$b*$b+$c*$c*$c==$i){
//     echo $i."<br>";
//   }
// }

// $add=0;
// for ($i=0; $i < 123456; $i++) {
//   $b=substr(strval($i),strlen(strval($i))-1);
//   if($i/7==0 || $b=="7"){
//     $add=$add+$i;
//   }
// }
// echo $add;

// $arr=array();
// $arr[]=1;
// $arr[]=1;
// for ($i=2; $i < 46; $i++) {
//   $arr[]=$arr[count($arr)-1]+$arr[count($arr)-2];
// }
// foreach ($arr as $key => $value) {
//   echo ($key+1)."  :  ".$value."<br>";
// }

// set_time_limit(1800);
// $add=0;
// $arr=array();
// for ($i=2; $i <123456 ; $i++) {
//   $if=0;
//   for ($j=2; $j < $i; $j++) {
//     if(is_int($i/$j)){
//       $if=1;
//       break;
//     }
//   }
//   if($if==0){
//     $add++;
//     $arr[]=$i;
//   }
// }
// echo "总共有：".$add."个<br>";
// echo "结果集为：<br>";
// foreach ($arr as $key => $value) {
//   echo $key."   :   ".$value."<br>";
// }

$arr=array();
for ($i=2; $i <=100 ; $i++) {
  $if=0;
  for ($j=2; $j < $i; $j++) {
    if(is_int($i/$j)){
      $if=1;
      break;
    }
  }
  if($if==0){
    $arr[]=$i;
  }
}
$add=0;
foreach ($arr as $key => $value) {
  echo ($key+1)."   :   ".$value."<br>";
   echo $add=$add+$value."<br>";
}
echo "2~100之间的质数和是：".$add;


 ?>
