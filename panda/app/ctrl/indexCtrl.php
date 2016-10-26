<?php
	namespace app\ctrl;
	use core\lib\model;
	class indexCtrl extends \core\panda {
		public function index(){
			//调取数据库数据
			// $model = new \core\lib\model();
			// $sql = 'select * from user';
			// $ret = $model -> query($sql);
			// p($ret->fetchAll());

			//调取视图文件
			$data = '熊猫框架运行成功！^_^';
			$title = 'Hello';
			$this->assign('title',$title);
			$this->assign('data',$data);
			$this->display('index.html');

			//$data = array('username' => 'panda2');
			//$model = new \app\model\dataModel();
			//$ret = $model -> lists('user','*');
			//$ret = $model -> getOne('user','1');
			//$ret = $model -> setUpdate('user','1',$data);
			//$ret = $model -> setInsert('user',$data);
			//dump($ret);
		}

		public function admin() {
			$data = '熊猫框架后台管理运行成功！^_^';
			$title = 'Hello';
			$this->assign('title',$title);
			$this->assign('data',$data);
			$this->display('index.html');
		}
	}