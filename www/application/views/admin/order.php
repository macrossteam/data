<form action="" method="Get" accept-charset="UTF-8">
	
	<table border="1px">
	<tr>
	<td>Номер</td>
	<td>Наименование</td>
	<td>Количество</td>
	<td>Цена</td>
	<td>Сумма</td>
	</tr>
	<?$i=1;$sym=0;?>
	<?foreach($inf as $row): ?>
	<tr>
	<td> <? echo $i; ?> </td>
	<td> <? echo $row['information']; ?> </td>
	<td> <? echo $row['count']; ?> </td>
	<td> <? echo $row['price']; ?> </td>
	<td> <? echo $row['price']*$row['count']; $sym+=$row['price']*$row['count'] ?> </td>
	</tr>
	
	<? endforeach ?>
	
	</table>
	<p>Итоговая сумма: <? echo $sym; ?>  рублей</p>
		<p><input type="submit" name="confirm_order" value="Обработан"/></p>
	<p><input type="submit" name="post_order" value="Отправлен"/></p>
</form>
	