<?php
	namespace app\model;
	use core\lib\model;
	//数据库类
	class dataModel extends model {
		/**
		* 获取多条数据
		* select($table, $join, $columns, $where)
		* $table 表名
		* $join  多表查询,不使用可以忽略
		* $columns 要查询的字段名,查询全部用*
		* $where[array] 查询条件
		*/
		public function lists($table, $columns) {
			$ret = $this->select($table,$columns);
			return $ret;
		}

		/**
		* 获取单条数据
		* get($table, $columns, $where)
		* $table 表名
		* $columns 要查询的字段名
		* $where[array] 查询条件
		*/
		public function getOne($table, $id) {
			$ret = $this->get($table,'*',array(
				'id' => $id
				));
			return $ret;
		}

		/**
		* 更新数据
		* update($table, $data, $where)
		* $table 表名
		* $data[array] 修改的数据
		* $where[array] 查询条件
		*/
		public function setUpdate($table, $id, $data) {
			return $this->update($table, $data, array(
				'id' => $id
				));
		}

		/**
		* 删除数据
		* delete($table, $where)
		* $table 表名
		* $where[array] 查询条件
		*/
		public function delOne($table, $id) {
			return $this->delete($table, array(
				'id' => $id
				));
		}

		/**
		* 插入数据
		* insert($table, $data)
		* $table 表名
		* $data[array] 修改的数据
		* $where[array] 查询条件
		*/
		public function setInsert($table, $data) {
			return $this->insert($table, $data);
		}

		/**
		* 获取数据
		* query($query)
		* $query 原生数据库语句
		*/
		public function setQuery($query) {
			$ret = $this->query($query);
			return $ret;
		}
	}