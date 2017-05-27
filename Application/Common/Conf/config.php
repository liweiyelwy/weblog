<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_ENGINE_TYPE'			=> 'Smarty', 	//使用smarty模板
	'WX_APPID'              =>  'wxe0766082e1c6385a',   //微信appid
	'WX_APPSECRET'          =>  '71545c2fca72bcf7efdcaf8de8a1987d',  // 微信appsecret
	'WX_REDIRECT_URL'				=>	'',
	//以下为容联短信接口配置参数
	'RL_ACCOUNTSID'					=>	'aaf98f89544cd9d901545a85fe490f0c',		//主帐号
	'RL_ACCOUNTTOKEN'				=>	'ddc481323b7c4e79b2cb85e233e9f59a',		//主帐号Token
	'RL_APPID'							=>	'8a48b551544cd73f01545a89e4900f3b',		//应用Id
	'RL_SERVERIP'						=>	'app.cloopen.com',		//请求地址，格式如下，不需要写https://
	'RL_SERVERPORT'					=>	'8883',		//请求端口
	'RL_SOFTVERSION'				=>	'2013-12-26',		//REST版本号
	'RL_CODENUMBER'					=>	'6',		//短信验证码位数
	'RL_MESSAGEMODEL'				=>	'1',		//短信模板
	'RL_MESSAGEMIN'					=>	'6',		//短信多少分钟内有效
	'APPLE_SERVICE_IN'			=>	'0',			//是否允许爬取苹果售后地址并放入到数据库	0：否，1：是
	'PASSWORD_KEY'					=>	'liweiyekey',


);
