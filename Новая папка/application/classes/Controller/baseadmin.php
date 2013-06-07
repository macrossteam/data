<?php defined('SYSPATH') or die('No direct script access.');

abstract class  Controller_BaseAdmin extends Controller_Template {
	
	public $template ='main';
	
	public function before()
	{	
		parent::before();
		$auth = Auth::instance();
		if($auth->logged_in()==0){
			HTTP::redirect();
		}
		$username= $auth->get_user();
		if($username->username != 'admin')
		{
			HTTP::redirect();
		}
		$controller_name = Request::current()->controller();
		$auth = Auth::instance();
		
	
		$config_name = 'admin';
		$site_config = Kohana::$config->load($config_name);	//создание объекта конфига
		View::set_global('title', $site_config->get('title')); //объевление глобалной переменной title
		View::set_global('description',$site_config->get('description'));	//объевление глобалной переменной description
		
		//формируем массив ссылок
		$list = $site_config->get('list_link');
		
		
		//передаем ссылки в главный шаблон
		$this->template->list_link = $list;

		$this->template->header 	=  $site_config->get('header');
		$this->template->footer 	=  $site_config->get('footer');
		$this->template->scripts 	=  $site_config->get('scripts');
		$this->template->content 	=  $site_config->get('content');
		$this->template->css 		=  $site_config->get('css');
		
		
	}
	
	
}
