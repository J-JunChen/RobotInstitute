<?php
return array(
	//'配置项'=>'配置值'
		

	'URL_CASE_INSENSITIVE' =>true, // URL不区分大小写
 
 	'TMPL_TEMPLATE_SUFFIX'=>'.php',


	'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
	'DEFAULT_MODULE'       =>    'Home',  // 默认模块
	'DEFAULT_CONTROLLER' => 'Index', // 默认控制器名称

	'DEFAULT_ACTION' => 'index', // 默认操作名称


	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'robot_tp', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PARAMS' =>  array(), // 数据库连接参数
	'DB_PREFIX' => 'robot_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	


 	 // phpMailer基本参数设置
	"MAIL_Host" => 'smtp.163.com',
	"MAIL_SMTPSecure" => 'ssl',
	"MAIL_Port" => 465,
	"MAIL_CharSet" => 'UTF-8',
	"MAIL_Username" => '你的163邮箱',
	"MAIL_Password" => '你的163邮箱的“客户端授权密码”',
	"MAIL_From" => '你的163邮箱',

);