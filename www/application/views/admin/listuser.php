<form action="" method="Get" accept-charset="UTF-8">
	
	<table border="1px">
	<tr>
	<td>Номер</td>
	<td>Email</td>
	<td>Имя пользователя</td>
	<td>Количество входов</td>
	<td>Удалить</td>
	</tr>
	
	<?foreach($inf as $row): ?>
	<tr>
	
	<td> <? echo $row['id']; ?> </td>
	<td> <? echo $row['email']; ?> </td>
	<td> <? echo $row['username']; ?> </td>
	<td> <? echo $row['logins']; ?> </td>
	<td> <button type="submit" name="delete_user" value = "<? echo $row['id']; ?>" >Удалить</button>
	</tr>
	
	<? endforeach ?>
	
	</table>
	
</form>
	