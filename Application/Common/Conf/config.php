<?php
return array(
	//'配置项'=>'配置值'
    //数据库配置
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'mmw',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    //'DB_PWD'                =>  'tkatph6e',          // 密码
    'DB_PWD'                =>  'root',
    'DB_PORT'               =>  '3306',        // 端口

    'IMG_SAVE_PATE' => './public/Img/',
    'FILE_UPLOAD_TYPE' => array(
        'jpg',
        'jpeg',
        'png',
    ),
    'MAX_FILE_UPLOAD_SIZE' => 1024 * 1024 * 10,
    /* 短信验证码配置 */
    'PHONE_PATTERN' => '/13[01235679]{1}\d{8}|15[01235689]\d{8}|18[0123456789]\d{8}/',
//    'MSG_UID' => '910',                       //企业ID号
//    'MSG_PWD' => 'jiNgjia2018',               //接口密码
//    'MSG_USER' => 'jingjia',				  //接口账号

    'MSG_UID' => '938',                       //企业ID号
    'MSG_PWD' => 'Huoxren2018',               //接口密码
    'MSG_USER' => 'huoxingren',				  //接口账号

    'MSG_TEMP' => '【竞价网】感谢你注册竞价买卖网,你的验证码:%verify%,验证码请勿提供给他人' //短信模版
);