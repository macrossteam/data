<?php defined('SYSPATH') or die('No direct script access.');
	
	class Controller_Users extends Controller_BaseUser{
		
		public function action_information()
		{	$auth = Auth::instance();
			
			$auth_id = $auth->get_user();
			
			$inf = new Model_Usersm();
			$infs = $inf->get_all_where_one('information',$auth_id->id);
			$content = View::factory('users/information')
										->set('inf',$infs);
			if(isset($_GET['infsubmit']))
			{
				$fio = Arr::get($_GET,'FIO','');
				$phone = Arr::get($_GET,'PHONE','');
				$address =  Arr::get($_GET,'ship_address','');
				$inf->set_information($auth_id->id,$fio,$phone,$address);
				
				HTTP::redirect('users/information');
			}
			
			$this->template->content = $content;
		}
		public function action_orders()
		{	$session = Session::instance();
			$auth = Auth::instance();
			$auth_id = $auth->get_user();
			$content = View::factory('users/orderstatus')
										->bind('inf',$orders_st);
			$orders = new Model_Usersm();
			$orders_st = $orders->get_all_where_one('orders_status',$auth_id->id);
			
			if(isset($_GET['submitorder']))
			{
				$code = Arr::get($_GET,'submitorder','');
				$session->set('ordercode',$code);
				
				HTTP::redirect('users/order');
				
			}
			$this->template->content = $content;
		}
		public function action_order()
		{
			$session = Session::instance();
			$order = new Model_Usersm();
			$data = $order->get_parts($session->get('ordercode'));
			
			
	
			$content = View::factory('users/order')
										->bind('inf',$data);
			$this->template->content = $content;
		}
		
	}