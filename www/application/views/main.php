<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php foreach($css as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
<?php endforeach; ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
if(isset($srcripts))
{
foreach($scripts as $script): ?>
<script src="<?php echo URL::base(); ?>public/scripts/<?php echo $script;?>.js"></script> 
<?php  endforeach; }?>

<title><?echo $title?></title>
</head>

<body>

	<div id="conteiner">
	<div id ="header">
	<div id="logo"><a href="<? echo URL::site();?>"><span class="orange">Lada</span>Parts</a></div>
	
	<div id="usertable"><a href="/auth/autorization">Личный кабинет...</a></br><a href="/shopcart">Корзина...</a></div>

	
	<div id="menu">
					<ul>
								<? foreach($list_link as $link): ?>
									
										<li>
											<?php echo $link;?>
										</li>
								
								<?php endforeach; ?>
					</ul>
	</div>
	</div>
		<div id="main">	
		<div id ="content">	
		<?echo $content?>
		
		</div>
		</div>
		</div>
<div id="footer"></div>
</body>    
</html>

