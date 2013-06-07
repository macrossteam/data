 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script>
$(document).ready(function(){
$(".hide").hide();
$("h3 span").click(function(){
$(this).parent().next().slideToggle();
});
}); 
</script>
 <style>
h3 { cursor:pointer;}

</style>
<form action="" method="Get" accept-charset="UTF-8">

<?foreach($categorys as $category){ ?>
     <h3><span><? echo $category['name'];?><span></h3>
	 <ul class ="hide">
                <? foreach($podcategorys as $podcategory)
                {       if($podcategory['id_category'] == $category['id'])
                        {?>
                        <li><button type="submit" name="podcatsubmit" value="<? echo $podcategory['name']?>"/><?echo $podcategory['name']?></li>
                        <?}
                }?>
    </ul>
<?}?>



	
	
	
	
	
	
</form>