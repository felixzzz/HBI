<html>
<head>
	<title><?=$title?></title>
    <link rel="icon" type="image/ico" href="<?=base_url()?>assets/img/ico.ico"></link>       
    <style>
		.body{
			width:960px;
			margin:0 auto -1 auto;
			height: inherit;
			
		}
		.border{
			border-radius: 5px;	
		}
		.bg
		{
			background:rgba(255, 255, 255, 0.6);
		}
		
		.product{
			margin: auto;
			text-align:left;
			vertical-align:top;	
			border:dashed;
		}
	</style>       

</head>
<body background="<?=base_url()?>assets/img/405.jpg"> 
	<div class="body border">
		<?=$header?> 
    	<div style="float:left; position: static" class="bg body">
	    	 <?=$content?>
    	</div>
        <div>
                <?=$footer?>
        </div>
    </div>
    
    <a href="http://apycom.com/" style="display:none">Apycom jQuery Menus</a>
</body>
</html>