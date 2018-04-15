<?php
return array(
	// "ERROR_PAGE" => '404'
	
	
	'URL_ROUTER_ON'   => true, 

	'URL_ROUTE_RULES'=>array(

		//目录
		'index' => 'Index/index',
	    'institute_album' => 'Index/institute_album',
	    'institute_overview' => 'Index/institute_overview',  
	    'teaching_work' => 'Index/teaching_work',
	    'enroll_student' => 'Index/enroll_student',
	    'institute_show' => 'Index/institute_show',
	    'learning_resources' => 'Index/learning_resources',

	   	'institute_news' => 'Index/institute_news',

	    'feedback' => 'Index/feedback',  //反馈信息

	    'read_file' => 'Index/read_file', //查看文件
	    'download_file' => 'Index/download_file',  //下载文件

	    'institute_news_modules' => 'Index/institute_news_modules',  //学院动态

	    'login_admin' => 'Index/login_admin',  //登录后台

	),

);