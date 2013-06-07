<?php defined('SYSPATH') or die('No direct script access.');
	
	return array(
		'username'=> array(
							'not_empty'=>'Поле email пустое',
							'email'=>'Проверьте правильность ввода email',
							'user_unique'=>'Такой email уже зарегестрирован',
							),
		'password'=> array(
							'not_empty'=>'Поле password пустое',
							'min_length'=>'Пароль слишком короткий',
							),
		);
				
	