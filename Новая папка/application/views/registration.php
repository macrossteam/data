<? 	if( isset($errors)){
	
		foreach($errors as $error)
		{
			echo '<p>'.$error.'</p>';
			}
			}
		
?>
	
	<form action="" method="Get" accept-charset="UTF-8">
     <br/>
	<span>Email</span>  <input type="text" name="email" value="" />
    <br/>
   	<span>Пароль</span>   <input type="password" name="password" value=""/>
     <br/>
	<input type="submit" name="regsubmit" value="Зарегестрироватся"/>
	</form>
