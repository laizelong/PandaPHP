<?php
	namespace core\lib;
	use core\lib\conf;
	//日志类
	class log {
		/**
		* 1.确定日志的存储方式
		* 2.写日志
		*
		*/
		static $class;
		static public function init() {
			//确定存储方式
			$drive = conf::get('DRIVE','log');
			$classDrive = '\core\lib\drive\log\\'.$drive;
			self::$class = new $classDrive;
		}

		static public function log($name, $file = 'log') {
			self::$class->log($name, $file);
		}
	}