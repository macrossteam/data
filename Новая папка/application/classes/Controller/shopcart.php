<?php defined('SYSPATH') or die('No direct script access.');
	

	
		class Controller_Shopcart extends Controller_Base {
			
			public function action_index()
			{	$session = Session::instance();
				$content = View::factory('shopcart');
				$content->post = '';
				$order_name = mt_rand(0,1000000000);
				if(isset($_SESSION['cart']))
				{	
					foreach($_SESSION['cart'] as $shopdata[])
					{	
						$content->shopdata = $shopdata;
						
					}
					if(isset($shopdata))
					{
					foreach($shopdata as $row)
					{
						$id_text[] =$row['id'];
						
					}
					
						for($i=0;$i<count($id_text);$i++)
						{
						
						$content->count = $_SESSION['countpr'][$id_text[$i]];
						if(isset($_GET[$id_text[$i]]))
						{	
							$_SESSION['countpr'][$id_text[$i]]=Arr::get($_GET,$id_text[$i],'');
							
						
						}
						}
					if(isset($_GET['confirm']))
					{
						HTTP::redirect('shopcart');
					}
					
					if(isset($_GET['post']))
						{		
								
								$auth = Auth::instance();
								if($auth->logged_in()){
								$content->label = '';
								$m_cart = new Model_Shopcart();
								$orders = new Model_Orderstatus();
								
								$user =  $auth->get_user();
								$id = $user->id;
								$orders->insert_order_status($order_name,0,$id);
								foreach($shopdata as $row)
								{
								$m_cart->insert_order($row['id'],$id,$_SESSION['countpr'][$row['id']],$order_name);
								}
								$session->delete('cart');
								$session->delete('countpf');
								HTTP::redirect('shopcart');
							}
							else{
							HTTP::redirect('registration');
							}
					
						}

					if(isset($_GET['check']))
					{	$check = Arr::get($_GET,'check','');
						var_dump($check);
						unset($_SESSION['cart'][$check]);
						HTTP::redirect('shopcart');
					}
					}
				}
					
					
				$this->template->content = $content;
			}
		}
