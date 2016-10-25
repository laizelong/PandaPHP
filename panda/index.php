<?php
/**
 *	入口文件
 *	1.定义常量
 *	2.加载函数库
 *  3.启动框架
 */
// 定义常量
	define('PANDA',dirname(realpath(__FILE__)));
	define('CORE',PANDA.'/core');
	define('APP',PANDA.'/app');
	define('MODULE', 'app');
	define('DEBUG',true);
	include "vendor/autoload.php";

	if(DEBUG) {
		$whoops = new \Whoops\Run;
		$errorTitle = "熊猫框架出错啦！^_^";
		$option = new \Whoops\Handler\PrettyPageHandler;
		$option -> setPageTitle($errorTitle);
		$whoops -> pushHandler($option);
		$whoops -> register();
		ini_set('display_errors', 'On');
	} else {
		ini_set('display_errors', 'Off');
	}
// 加载函数库
	include CORE.'/common/function.php';
	include CORE.'/panda.php';
// 启动框架
	spl_autoload_register('\core\panda::load'); //自动加载类
	\core\panda::run();