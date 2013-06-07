<form action="" method="Get" accept-charset="UTF-8">
 
<table><tr>	
<?$i=1;
 foreach($dataL as $row):?>
	
	<td ><button id ="cars" type="submit" name="car_submit" value="<? echo $row['name']; ?>"><img witdh="180px" height="120" src="<? echo $row['img']?>"/> </button></td>	
	<td class="cars"><?echo $row['name']?></td>
	<? if($i%2==0){?>
	</tr><tr>
	<? } ?>
	
	<? $i++; endforeach;?>
</table>
</form>