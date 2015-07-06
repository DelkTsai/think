<?php
include "wechat.class.php";

$options = array(
    'token'=>'loyal', //填写你设定的key
    'encodingaeskey'=>'encodingaeskey', //填写加密用的EncodingAESKey
    'appid'=>'wx7193c2d6b190a8eb', //填写高级调用功能的app id, 请在微信开发模式后台查询
    'appsecret'=>'8cbf3298f61e426b5130f91b6eb9c7f5' //填写高级调用功能的密钥
    );
 	$weObj = new Wechat($options); //创建实例对象

$weObj->valid();//明文或兼容模式可以在接口验证通过后注释此句，但加密模式一定不能注释，否则会验证失败
$type = $weObj->getRev()->getRevType();

switch($type) {
	case Wechat::MSGTYPE_TEXT:
	$weObj->text($weObj->getRevContent())->reply();
	exit;
	break;
	case Wechat::MSGTYPE_EVENT:
	$weObj->text("hello, I'm wechat")->reply();
	break;
	case Wechat::MSGTYPE_IMAGE:
	$weObj->text("hello, Images")->reply();
	break;
	default:
	$weObj->text("help info")->reply();
}