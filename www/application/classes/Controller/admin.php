<?php defined('SYSPATH') or die('No direct script access.');

class  Controller_Admin extends Controller_BaseAdmin {
	
	
	public function action_listuser()
		{	
			$content = View::factory('admin/listuser')
										->bind('inf',$infs);
			$inf = new Model_Usersm();
			$infs = $inf->get_all('users');
			
			if(isset($_GET['delete_user']))
			{
				$user = new Model_Registration();
				$id =Arr::get($_GET,'delete_user','');
				$user->del($id);
				HTTP::redirect('admin/listuser');
			}
			$this->template->content = $content;
		}
	public function action_index()
	{
			$content = View::factory('admin/orderstatus')
										->bind('inf',$infs);
			$inf = new Model_Usersm();
			$infs = $inf->get_all('orders_status');
			if(isset($_GET['submitor']))
			{	$session = Session::instance();
				$code = Arr::get($_GET,'submitor','');
				$session->set('ordercode',$code);
				HTTP::redirect('admin/order');
			}
			if(isset($_GET['id_user']))
			{	$id = Arr::get($_GET,'id_user','');
			
				$_SESSION['iduser']=$id;
				HTTP::redirect('admin/userinf');
			}
			$this->template->content = $content;
			
			
	}
	public function action_userinf()
	{	$session = Session::instance();
		$content = View::factory('admin/user_information')
										->bind('inf',$infs);
											$inf = new Model_Usersm();
		$infs = $inf->get_all_where_one('information',$_SESSION['iduser']);
		$this->template->content = $content;
	}
	public function action_order()
	{
		
			$session = Session::instance();
			$order = new Model_Usersm();
			$code =$session->get('ordercode');
			$data = $order->get_parts($code);
			$content = View::factory('admin/order')
										->bind('inf',$data);
			if(isset($_GET['confirm_order']))
			{
				$order_st = new Model_Orderstatus();
				$order_st->chenge_status($code,1);
			}
			if(isset($_GET['post_order']))
			{
				$order_st = new Model_Orderstatus();
				$price = new Model_Catalog();
				$order_st->chenge_status($code,2);
				foreach($data as $row)
				{
					$price->chenge_price_count($row['id'],$row['count']);
				}
			}
			$this->template->content = $content;
			
	}
}
