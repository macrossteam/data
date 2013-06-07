<form action="" method="Get" accept-charset="UTF-8">
	<table >
	<?foreach($inf as $row): ?>
	<tr><td>ФИО:</td><td> <? echo $row['FIO']; ?></td></tr>
	<tr><td>ТЕЛЕФОН:</td><td><? echo $row['PHONE']; ?></td></tr>
	<tr><td>Адрес доставки: </td><td><? echo $row['ship_address']; ?></td></tr>
	
	<? endforeach ?>
	</table>
	</form>
	