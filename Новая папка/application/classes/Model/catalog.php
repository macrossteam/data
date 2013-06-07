<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Catalog 
	{
	 
		public function select_LADA()
		{		
				
		$sql = "SELECT * FROM `cars`";
		
        return DB::query(Database::SELECT, $sql)
                   ->execute();
				
			
		}
	
		public function get_all($tablename)
		{   
        $_tableCategory = $tablename;
        $sql = "SELECT * FROM ". $_tableCategory;
                return DB::query(Database::SELECT, $sql)
                   ->execute();
		}
		public function chenge_price_count($id,$count)
		{
			$price = ORM::factory('price',$id);
			$realcount = $price->count;
			$price->count = $realcount - $count;
			$price->save();
		}
		public function get_all_where($tablename,$pod_cat_id,$model)
		{   
        $_tableCategory = $tablename;
		$pod_cat_id = "'".$pod_cat_id."'";
		$model = "'%".$model."%'";
        $sql = "SELECT * FROM `product` WHERE `options` LIKE ".$model." and `id_pod_category` = ".$pod_cat_id;
		
                return DB::query(Database::SELECT, $sql)
                   ->execute();
		}
			
	}

	