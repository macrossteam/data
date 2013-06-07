<form action="" method="Get" accept-charset="UTF-8">
	<?$i=1;?>
	<table border="1px">
	<tr><td></td><td>id</td><td>Номер заказа</td><td>Состояние</td></tr>
	<?foreach($inf as $row): ?>
	
	
	<? if($row['sost'] == 0){?>
	<tr><td><? echo $i;$i++?></td><td><input type="submit" name="id_user" value ="<?echo $row['id_user'];?>">
	</td><td><input type="submit"  name="submitor" value="<? echo $row['name']; ?>"/></td>
	<td>В обработке</td></tr>
	<?} if($row['sost'] == 1){?>
	<tr><td><?echo $i;$i++?></td><td><input type="submit" name="id_user" value ="<?echo $row['id_user']?>"></td><td><input type="submit" name="submitor" value="<? echo $row['name']; ?>"/></td>
	<td>Обработан</td></tr>
	<?} if($row['sost'] == 2){?>
	<tr><td><?echo $i;$i++?></td><td><input type="submit" name="id_user" value ="<?echo $row['id_user']?>"></td><td><input type="submit" name="submitor" value="<? echo $row['name']; ?>"/></td>
	<td>Отправлен</td></tr>
	
	<?} endforeach ?>
	</table>
	
</form>
	