<?php defined('SYSPATH') or die('No direct script access');

return array(
		
		'title' => 'Админка',
		'description' => 'Страница админки',
		'scripts'=> '',
		'content'=> 'привет это админка',
		'css' => array('style'),
		'list_link'=> array(	
							'users' => '<a href='.URL::site('admin/listuser').'>Пользователи</a>',
							'orders' => '<a href='.URL::site('admin/listorders').'>Заказы</a>',
							),
		'header' => 'Шапка страницы',
		'footer' => 'Подвал страницы'
		);