
<center><h2><?=$product?></h2></center>
<table class="product">
<?
	$i=0;
	foreach ($rs as $row)
	{
		
?>
            <tr>	
                <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Product_type_ID']?>/<?=$row['Picture']?>"  width="100%"/></td>
<?         
       if($i%2==0)
		{
?>
                <td valign="top"  bgcolor="#81D2A7">
                    <table>
                        <tr>
                            <td>Product ID</td>
                            <td>:</td>
                            <td><?=$row['Product_ID']?></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>:</td>
                            <td><?=$row['Description']?></td>
                        </tr>
                        <tr>
                            <td>Packaging</td>
                            <td>:</td>
                            <td><?=$row['Packaging']?></td>
                        </tr>
                    </table>
                </td>

<?
		}
		else{
?>

                <td valign="top"bgcolor="#FFFD7F">
                    <table>
                        <tr>
                            <td>Product ID</td>
                            <td>:</td>
                            <td><?=$row['Product_ID']?></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>:</td>
                            <td><?=$row['Description']?></td>
                        </tr>
                        <tr>
                            <td>Packaging</td>
                            <td>:</td>
                            <td><?=$row['Packaging']?></td>
                        </tr>
                    </table>
                </td>

<?
			
		}
		$i++;
	}
		
?>
</table>