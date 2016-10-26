<?php
	namespace core;
	class panda {
		public static $classMap = array();
		public $assign;
		public static function run() {
			//日志管理
			\core\lib\log::init();
			\core\lib\log::log($_SERVER,'server');
			//URL转换
			$route = new \core\lib\route;
			$ctrlClass = $route -> ctrl;
			$action = $route -> action;
			$ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
			$cltrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
			if (is_file($ctrlfile)) {
				 include $ctrlfile;
				 $ctrl = new $cltrlClass();
				 $ctrl -> $action();
				 \core\lib\log::log('ctrl:'.$ctrlClass.'    '.'action:'.$action);
			} else {
				throw new \Exception("找不到控制器".$ctrlClass);
			}
		}

		static public function load($class) {
			//自动加载类库
			//new \core\route();
			// $class = '\core\route';
			//转换成 PANDA.'/core/route.php';

			if (isset($classMap[$class])) {
				return true;
			} else {
				$class = str_replace('\\', '/', $class);
				$file = PANDA.'/'.$class.'.php';
				if (is_file($file)) {
					include $file;
					self::$classMap[$class] = $class;
				} else {
					return false;
				}
			}
		}

		public function assign($name, $value) {
			$this->assign[$name] = $value;
		}

		public function display($file) {
			$loadfile = $file;
			$file = APP.'/views/'.$file;
			if (is_file($file)) {
				//引入twig模版引擎
				\Twig_Autoloader::register();

				$loader = new \Twig_Loader_Filesystem(APP.'/views');
				$twig = new \Twig_Environment($loader, array(
				    'cache' => PANDA.'/cache/twig',
				    'debug' => DEBUG
				));
				$template = $twig->loadTemplate($loadfile);
				$template->display($this->assign?$this->assign:'');

			}
		}
	}