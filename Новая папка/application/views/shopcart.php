<form action="" method="Get" accept-charset="UTF-8">
<? 
	$sym=0;
	
	if(isset($shopdata))
	{?>
	<table border="1"><tr><td>Наименование</td><td>Наличие</td><td>Заказать</td><td>Цена</td><td>Сумма</td><td>Удалить</td></tr>
	
	
		<?foreach($shopdata as $row)
		{?>
		
		<tr>
		<td> <? echo $row['information']; ?> </td>
		<td> <? echo $row['count']?>
	    <td><input type="text" name="<? echo $row['id']; ?>" value="<? echo $count =$_SESSION['countpr'][$row['id']];?>"/>
	    <td> <? echo $row['price']; ?> </td>
		<td> <? echo $row['price']*$count;
		$sym+=$row['price']*$count;?> </td>
		<td><button type="submit" name="check" value="<? echo $row['id']; ?>">Удалить</button></td>
		</tr>
		
		<?}?>
		
		</table>
	
		<input type="submit" name="confirm" value="Подтвердить"/>
		<input type="submit" name="post" value="Отправить"/>
		<p>Итоговая сумма: <? echo $sym; ?>  рублей</p>
	
	<?}
	
	else echo 'Корзина пуста';
	?>

	
	</br>
	</form>
	