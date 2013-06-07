<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Base {

	public function action_about()
	{	$content = View::factory('static/about');
		$this->template->title = 'Страница о нас';
		$this->template->description = 'Страница о нас';
		$this->template->content= $content;
	}
	public function action_contact()
	{	$content = View::factory('static/contact');
		$this->template->title = 'Контакты';
		$this->template->description = 'Контакты';
		$this->template->content= $content;
	}

} 
