<center><h2><?=$product?></h2></center>
<table class="product">

<?
	$i =0;
	foreach ($rs as $row)
	{
		
		if($i %2==0)
		{
?>
            <tr bgcolor="#81D2A7">
                <td valign="top"><?=$row['Description']?></td>
                <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Picture']?>" /></td>    
            </tr>
<?
		}
		else
		{
			?>
			<tr bgcolor="#FFFD7F">
                <td valign="top"><?=$row['Description']?></td>
                <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Picture']?>" /></td>    
            </tr>
            <?
		}
		$i++;
	}
?>
</table>