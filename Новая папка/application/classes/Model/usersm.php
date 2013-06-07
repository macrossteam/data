<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Usersm 
	{
	 
		public function get_all($tablename)
		{   
        $_tableCategory = $tablename;
        $sql = "SELECT * FROM ". $_tableCategory;
                return DB::query(Database::SELECT, $sql)
                   ->execute();
		}
		public function get_all_where_one($tablename,$user_id)
		{   
        $_tableCategory = $tablename;
		$user_id = "'".$user_id."'";
	
        $sql = "SELECT * FROM ". $_tableCategory." WHERE  `id_user` = ".$user_id;
		
                return DB::query(Database::SELECT, $sql)
                   ->execute();
		}
		public function get_all_where($tablename,$pod_cat_id,$model)
		{   
        $_tableCategory = $tablename;
		$pod_cat_id = "'".$pod_cat_id."'";
		$model = "'%".$model."%'";
        $sql = "SELECT * FROM ".$_tableCategory." WHERE `options` LIKE ".$model." and `id_pod_category` = ".$pod_cat_id;
		
                return DB::query(Database::SELECT, $sql)
                   ->execute();
		}
		public function set_information($id,$fio,$phone,$addres)
		{
			$set = ORM::factory('Infm',array('id_user'=>$id));
			$set->FIO = $fio;
			$set->PHONE = $phone;
			$set->ship_address = $addres;
			$set->save();
		}
		public function get_order($tablename,$code)
		{
		$_tableCategory = $tablename;
		$code = "'".$code."'";
	
        $sql = "SELECT * FROM ". $_tableCategory." WHERE  `orders_name` = ".$code;
		
                return DB::query(Database::SELECT, $sql)
                   ->execute();
		}
		public function get_parts($code)
		{
		$code = "'".$code."'"; 
		$sql = "SELECT DISTINCT `product`.`id`,`product`.`information`,`orders`.`count`, `product`.`price` FROM
	   `orders`,`product` where `product`.`id` =  `orders`.`id_parts`  and `orders`.`orders_name`=".$code;
		
                return DB::query(Database::SELECT, $sql)
                   ->execute();
		}
		
	}

	