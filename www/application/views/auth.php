<? 	if( isset($no_error)){
		echo '<p> Вы авторизовались успешно </p>';}
	if(isset($error)){
		echo '<p> При авторизации произошла ошибка </p>';}
	if(isset($user_login))
	{
		$user_name=$user->username;
		if($user_name=='admin')
		{
		echo $user_name;
		echo '</br>';
		echo '<a href="'.URL::SITE('admin/').'">Админка</a>';
		}
		else{ echo $user_name;
			echo '</br>';
			echo '<a href="'.URL::SITE('users/information').'">Личные данные</a>';
			echo '</br>';
			echo '<a href="'.URL::SITE('users/orders').'">Заказы</a>';
			echo '</br>';
			echo '<a href="'.URL::SITE('shopcart').'">Корзина</a>';
			}
		
		
		echo '<form action="" method="GET" accept-charset="UTF-8"><input type="submit" name="logout" value="Выйти"/></form>';
	}			
	if(isset($user_no_login)){

	echo '   <form action="" method="GET" accept-charset="UTF-8">
		   Логин:	   <input type="text" name="login" value=""/></br>
	 Пароль:	<input type="password" name="password" value=""/></br>
	<input type="submit" name="submit" value="Авторизоваться"/></br>
	<input type="submit" name="register" value="Регистрация"/>
	</form>';

	}
