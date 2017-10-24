<?php
header('content-type:text/html;charset=utf-8');
// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
$configs=dirname(__FILE__).'/protected/config/footerinfo.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
define("APP",$_SERVER['SCRIPT_NAME']);
$arr=explode("/", APP);
unset($arr[count($arr)-1]);
define("ROOT",join("/", $arr));
define("BACKSTAGEROOT",ROOT.'/protected/modules/public');
define("BACKSTAGEPublic",'./photoView/');

require_once($yii);
Yii::createWebApplication($config)->run();
