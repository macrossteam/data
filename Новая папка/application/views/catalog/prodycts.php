<form action="" method="Get" accept-charset="UTF-8">


	<table border="1"><tr><td>Наименование</td><td>Цена</td></tr>
	
	
		<?foreach($prodycts as $row)
		{?>
		
		<tr>
		<td> <? echo $row['information']; ?> </td>
		<td> <? echo $row['price']; ?> </td>
	    <td><button type="submit" name="order_submit" value="<? echo $row['id']; ?>">заказать</button>
		</tr>
		
		<?}?>
		
		</table>
	</form>
	