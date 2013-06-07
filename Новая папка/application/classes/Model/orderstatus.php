<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Orderstatus extends ORM
	{
	protected $_table_name='orders_status';
	
		public function insert_order_status($name,$sost,$id)
		{
			$status = ORM::factory('orderstatus');
			$status->name=$name;
			$status->sost=$sost;
			$status->id_user = $id;
			$status->save();
		}
		public function chenge_status($name,$sost)
		{
			$status = ORM::factory('orderstatus',array('name'=>$name));
			$status->name=$name;
			$status->sost=$sost;
			$status->save();
		}
		
	}