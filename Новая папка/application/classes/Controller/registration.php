<?php defined('SYSPATH') or die('No direct script access.');
	
		class Controller_Registration extends Controller_Base {
		
			public function action_index()
			{
				$auth = Auth::instance();
				$content = View::factory('registration');
				$data = array();
				
				if($auth->logged_in()){
					HTTP::redirect();
				}
				else{
					
						
						
						if(isset($_GET['regsubmit']))
						{	
							
							$email=Arr::get($_GET,'email','');
							$password=Arr::get($_GET,'password','');
							
							$regcode= mt_rand(0,1000000);
							$registration = new Model_Registration();
							
							if($registration->rules_check($email,$password))
							{
							$password= $auth->hash_password($password);
							$session = Session::instance();
							$session->set('email',$email);
							$session->set('password',$password);
							$session->set('regcode',$regcode);
							$sendemail = new Myclass();
							$from = 'macrossteam@mail.ru';
							$subject = 'test registration';
							$message = 'Ваш логин:'.$email.' код регистрации:'.$regcode;
							if($sendemail->send_mail($email, $from,$subject,$message))
							{
							HTTP::redirect('registration/regcode');
							}
							else $content->errors = 'ошибка отправки';
							}
							else $content->errors = $registration->errors;
						
							
							
								
						}
					}
						$this->template->content=$content;
			}
				
				
				

		
			public function action_regcode()
			{	
				$auth = Auth::instance();
				$content = View::factory('regcode');
				$session = Session::instance();
				$regcode=$session->get('regcode','');	
				var_dump($regcode);
				if($auth->logged_in()){
					HTTP::redirect();
				}
				else{
						if(isset($_GET['regcodes']))
						{		
						$email=$session->get('email','');
						$password=$session->get('password','');
						
						
							$formcode = Arr::get($_GET,'regcode','');
							$registration = new Model_Registration();
							if($regcode==$formcode)
							{
								
								if($registration->reg($email,$password,1))
								{	
									$session->delete('email');
									$session->delete('password');
									$session->delete('regcode');
									HTTP::redirect('auth/autorization');
								}
								else
								{
								$content->error='';
								}
							}
						else { $content->error='';}
						}
					}$this->template->content=$content;
			}
			
			
	}