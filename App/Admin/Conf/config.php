<?php
return array(
	//'配置项'=>'配置值'
	//
	
	//数据库配置信息
	// 'DB_TYPE' => 'mysql', // 数据库类型
	// 'DB_HOST' => '127.0.0.1', // 服务器地址
	// 'DB_NAME' => 'weixin', // 数据库名
	// 'DB_USER' => 'root', // 用户名
	// 'DB_PWD' => '520134', // 密码
	// 'DB_PORT' => 3306, // 端口
	// 'DB_PREFIX' => 't_', // 数据库表前缀
	// 'DB_CHARSET'=> 'utf8', // 字符集
	// 'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志

	'DB_TYPE' => 'sqlite',
	'DB_NAME' => './aowo.db', //冒号后面是数据库文件的地址，我的数据库是放在站点根目录，就直接这样写。
	'DB_PREFIX' => 't_',
	'DB_CHARSET' => 'utf8', // 数据库编码默认采用utf8
	'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志
	
	'WEB_SITE_TITLE' => '重庆晋德股权投资基金管理有限公司',

	 /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/static',
   		'__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
    ),
);