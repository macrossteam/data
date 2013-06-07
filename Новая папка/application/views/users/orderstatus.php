<form action="" method="Get" accept-charset="UTF-8">
	<?$i=1;?>
	<table border="1px">
	<tr><td></td><td>Номер заказа</td><td>Состояние</td></tr>
	<?foreach($inf as $row): ?>
	<? if($row['sost'] == 0){?>
	<tr><td><?echo $i;$i++?></td><td><input type="submit"  name="submitorder" value="<? echo $row['name']; ?>"/></td>
	<td>В обработке</td></tr>
	<?} if($row['sost'] == 1){?>
	<tr><td><?echo $i;$i++?></td><td><input type="submit" name="submitorder" value="<? echo $row['name']; ?>"/></td>
	<td>Обработан</td></tr>
	
	<?} endforeach ?>
	</table>
	
</form>
	