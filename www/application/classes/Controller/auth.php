<?php defined('SYSPATH') or die('No direct script access.');

class  Controller_Auth extends Controller_Base {
	
		public  function action_autorization()
		{	
			$auth = Auth::instance();
			$content = View::factory('auth');
			if($auth->logged_in()){
				$content->user_login ='';
				$content->user = $auth->get_user();
				if(isset($_GET['logout']))
				{
					$auth->logout();
					HTTP::redirect();

				}
				
			}
			else{	
					$content->user_no_login='';
					if(isset($_GET['submit'])){
						$login=Arr::get($_GET,'login','');
						$password=Arr::get($_GET,'password','');
						if($auth->login($login,$password)){
							$content->no_error = '';
							HTTP::redirect();
						}
						else {
						$content->error = '';}
						
					}
					if(isset($_GET['register']))
					{
						HTTP::redirect('registration');
					}
					
				}
			
			$this->template->content=$content;
		}
		
		
		
		
		
	}