<?php
	namespace core\lib;
	use core\lib\conf;
	//模型类
	//class model extends \PDO{

	//继承medoo的轻量级数据库类
	class model extends \medoo{
		public function __construct() {
			//PDO模型类连接
			//数据库连接
			// $database = conf::all('database');
			// try{
			// 	parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
			// } catch (\PDOException $e) {
			// 	p($e->getMessage());
			// }

			//Medoo数据库连接
			$option = conf::all('database');
			parent::__construct($option);
		}
	}
