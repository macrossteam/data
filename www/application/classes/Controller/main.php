<?php defined('SYSPATH') or die('No direct script access.');
	
	class Controller_Main extends Controller_Base{
		
		public function action_index()
		{
			$content = View::factory('mainpage');
			$this->template->content=$content;
		}
	}