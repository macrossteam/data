<?php defined('SYSPATH') or die('No direct script access.');

class Model_Registration {
		
			public function reg($email,$password,$role)
			{	
					
					$user = new Model_Usertable();
					$user->username= $email;
					$user->password= $password;
					$user->email =$email;
					$user->save();
				
					$id_user = ORM::factory('usertable',array('username'=>$email))->id;
									
					$roles = new Model_Roltable();
					$roles->user_id = $id_user;
					$roles->role_id = $role;
					$roles->save();			
					
				return TRUE;	
			}
			public function del($id)
			{
				$user=ORM::factory('usertable',$id);
				$user->delete();
			}
			public function rules_check($email,$password)
			{	$user = new Model_Usertable();
				$user->username= $email;
				$user->password= $password;
				
				try{
					$user->check();
					
					return TRUE;
				}	
				catch(ORM_Validation_Exception $e)
				{
						$this->errors = $e->errors('validation');
						return FALSE;
				}
			}
			
		
		
}