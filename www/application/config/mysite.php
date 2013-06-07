<?php defined('SYSPATH') or die('No direct script access');

return array(
	'title' => 'LadaParts',
	'description' => 'Автозапчасти для отечественных автомобилей',
	'scripts'=> array('jquery-1.9.1.min'),
	'content'=> 'Главная страница',
	'css' => array('style'),
	'list_link'=> array(	
						'main' => '<a class="active" href='.URL::site().'>Главная</a>',
						'parts'=>'<a href='.URL::site('catalog/cars').'>Запчасти</a>',
						'about' => '<a href='.URL::site('about').'>О нас</a>',
						'contact' => '<a href='.URL::site('contact').'>Контакты</a>'
						),
	'header' => 'Шапка страницы',
	'footer' => 'Подвал страницы'
	);