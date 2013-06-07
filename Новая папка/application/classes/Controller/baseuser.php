<?php defined('SYSPATH') or die('No direct script access.');

class  Controller_BaseUser extends Controller_Base {
	
	public function before()
	{
		$auth = Auth::instance();
		if($auth->logged_in()==0){
			HTTP::redirect();
		}
		return 	parent::before();
	}
}