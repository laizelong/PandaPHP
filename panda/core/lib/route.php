<?php
	namespace core\lib;
	use core\lib\conf;
	//路由类
	class route{
		public $ctrl;
		public $action;
		public function __construct() {
			/**
			 *	1.隐藏index.php
			 *	2.获取url参数部分
			 *  3.返回对应控制器和方法
			 */
			// if ($_SERVER['SCRIPT_NAME'] = '/index.php') {
			// 	return true;
			// } else {
			// 	$_SERVER['SCRIPT_NAME'] = '/index.php';
			// }
			if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
				$path = $_SERVER['REQUEST_URI'];
				$patharr = explode('/', trim($path,'/'));
				if(isset($patharr[0])) {
					$this->ctrl = $patharr[0];
					unset($patharr[0]);
				}
				if(isset($patharr[1])) {
					$this->action = $patharr[1];
					unset($patharr[1]);
				} else {
					$this->action = conf::get('ACTION','route');
				}
				//url的多余部分转化为get参数
				$count = count($patharr) + 2;
				$i = 2;
				while ($i < $count) {
					if (isset($patharr[$i + 1])) {
						$_GET[$patharr[$i]] = $patharr[$i + 1];
					}
					$i = $i + 2;
				}
			} else {
				$this->ctrl = conf::get('CTRL','route');
				$this->action = conf::get('ACTION','route');
			}
		}
	}