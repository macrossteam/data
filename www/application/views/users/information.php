<form action="" method="Get" accept-charset="UTF-8">

	

	<table>
	<tr><td>ФИО:</td><td> <input type="text" name="FIO" value=""></td></tr>
	<tr><td>ТЕЛЕФОН:</td> <td><input type="text" name="PHONE" value=""></td></tr>
	<tr><td>Адрес доставки</td><td><input type="text" name="ship_address" value=""></td></tr>
	</table>
	<button type="submit" name="infsubmit">Изменить</button>


		</form>
		
	<? if(isset($inf)){?>
	<table >
	<?foreach($inf as $row): ?>
	<tr><td>ФИО:</td><td> <? echo $row['FIO']; ?>"</td></tr>
	<tr><td>ТЕЛЕФОН:</td> <td><? echo $row['PHONE']; ?></td></tr>
	<tr><td>Адрес доставки: </td><td><? echo $row['ship_address']; ?></td></tr>
	</table>

	<? endforeach; }?>