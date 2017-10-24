<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'defaultController'=>'index/index',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',//自动包含models下的所有文件
		'application.components.*',//自动包含components下的所有文件
	),
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=bookstore',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
	      'road'=>'新手上路',
	      'roads'=>array(
	           'shoping'=>'购物流程演示',
	           'login'=>'注册用户 更改注册信息',
	           'problem'=>'购物常见问题',
	           'SpecialOffer'=>'关于特价书的常见问题',
	      ),
	      'eshopProblem'=>'购买问题',
	      'eshopProblems'=>array(
	         'order'=>'订单跟踪',
	         'payment'=>'付款方式',
	         'Balance'=>'帐户余额 ',
	         'withdraw'=>'申请提现',
	         'method'=>'配送方式及费用、范围',
	         'team'=>'集团购买'
	      ),
	     'service'=>'售后服务',
	     'services'=>array(
	         'pickUp'=>'退换货流程',
	         'Complaints'=>'投诉与建议',
	     ),
	     'speicalService'=>'特色服务',
	     'speicalServices'=>array(
	          'level'=>'会员等级与积分',
	          'bookCard'=>'中图书馨卡',
	          'email'=>'邮件订阅',
	          'friends'=>'邀请好友购买返5元',
	     ),
         'other'=>'其他信息',
	     'others'=>array(
	        'info'=>'本站简介',
	        'contact'=>'联系我们',
	        'Recruitment'=>'招聘英才',
	         'web'=>'网站联盟',
	         'Friendship'=>'友情链接'
	     ),
	    'license'=>'经营许可证编号',
	    'licenseinfo'=>'京ICP备09013606号-3京信市监发[2002]122号海淀公安分局备案编号：1101083394',
	    'permission'=>'营业执照',
	    'business'=>'出版物经营许可证'
	),
);