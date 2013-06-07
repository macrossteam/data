<form action="" method="Get" accept-charset="UTF-8">
<? 
	
	
	$table ='<table border="1"><tr><td>Название</td><td>Количество</td><td>Цена</td></tr>';
	
	foreach($shopdata as $row)
	{
	
	$table .= '<tr>'
	
	. '<td>' . $row[1]. '</td>'
	. '<td>' . $row[2]. '</td>'
	
	. '<td><input type="submit" name="order_submit" value="'.$row[0].'"/></td>'
	. '</tr>';

	}
	$table .='</table>';
	
	echo $table;
	?>
	<input type="submit" name="orderssubmit" value="Заказать"/>
	<input type="submit" name="order" value="Оформить заказ"/>
</form>