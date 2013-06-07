<?php defined('SYSPATH') or die('No direct script access.');
	class Controller_Catalog extends Controller_Base {
		
			public function action_cars()
			{
				$session = Session::instance();
				$content = View::factory('catalog/cars');
			
				$cars = new Model_Catalog();
				$content->dataL = $cars->select_LADA();
				
				
				if(isset($_GET['car_submit']))
				{
				 $session->set('modelcar',Arr::get($_GET,'car_submit',''));
				 HTTP::redirect('catalog/category');
				}
				
				$this->template->content = $content;
			}
			public function action_category()
			{	$session = Session::instance();
				
				
				$content = View::factory('catalog/category')
										->bind('categorys',$category)
                                        ->bind('podcategorys',$podcategory);
				
				
										$category = new Model_Catalog();
                                        $category = $category->get_all('category');
                                        $podcategory = new Model_Catalog();
                                        $podcategory = $podcategory->get_all('podcategory');
				
				if(isset($_GET['podcatsubmit']))
				{	$name = Arr::get($_GET,'podcatsubmit','');
					
					foreach($podcategory as $data)
					{
						if($data['name']==$name)
						{
						$session->set('podcategory',$data['id']);	
						}
						
					}
					HTTP::redirect('catalog/price');
				}
				$this->template->content = $content;
				
			}
			public function action_price()
			{	
				$session = Session::instance();
				$model = $session->get('modelcar');
				$id_pcat = $session->get('podcategory');
				$prodycts = array();
				$content = View::factory('catalog/prodycts')
										->bind('prodycts',$products);              
				$product = new Model_Catalog();
				$products = $product -> get_all_where('product',$id_pcat,$model);
				
				foreach($products as $arr)
				{
					$data[$arr['id']] = $arr;
				}
				
				if(isset($_GET['order_submit'])){
						$check = Arr::get($_GET,'order_submit','');
						$_SESSION['cart'][$check]=$data[$check];
						$_SESSION['countpr'][$check] = '1';
				}
				$this->template->content = $content;
				
			}
			
	}