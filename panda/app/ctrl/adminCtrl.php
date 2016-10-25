<?php
	namespace app\ctrl;
	use core\lib\model;
	class adminCtrl extends \core\panda {
		public function index() {
			$data = '熊猫框架后台管理运行成功！^_^';
			$title = 'Hello';
			$this->assign('title',$title);
			$this->assign('data',$data);
			$this->display('admin.html');
		}

		public function login() {
			$data = '熊猫框架后台管理登录！^_^';
			$title = 'Hello';
			$this->assign('title',$title);
			$this->assign('data',$data);
			$this->display('admin.html');
		}
	}