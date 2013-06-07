<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Shopcart 
	{
	 
		public function insert_order($id,$userid,$count,$order_name)
		{		$order = new Model_Ordermodel();
				$order->id_parts = $id;
				$order->user_id =  $userid;
				$order->count = $count;
				$order->orders_name = $order_name;
				$order->save();
			}
			
		}

	