<?php defined('SYSPATH') or die('No direct script access.');

	class Model_Usertable extends ORM
	{
	protected $_table_name='users';
	
		public function rules()
		{
			return array('username'=> array(
											array('not_empty'),
											array('email'),
											array(array($this,'user_unique')),
											),
						 'password'=> array(
											array('not_empty'),
											array('min_length', array(':value', 6)),
											),
						);
		}
		public function user_unique($username)
		{
			$orm = ORM::factory('usertable',array('username'=>$username));
			if($orm->loaded())
			{
				return FALSE;
			}
			else return TRUE;
			
		}
	}