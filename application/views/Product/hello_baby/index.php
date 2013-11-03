
<table border="1" style="width:960px">
<tr>
	<td>nb</td>    
</tr>
<tr>
<?
    foreach ($rs_nb as $row)
    {
?>
    <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Product_type_ID']?>/<?=$row['Picture']?>" /></td>
<?
    }
?>
</tr>
<tr>
<?
    foreach ($rs_ml as $row)
    {
?>
    <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Product_type_ID']?>/<?=$row['Picture']?>" /></td>
<?
    }
?>
</tr>
<tr>
<?
    foreach ($rs_tb as $row)
    {
?>
    <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Product_type_ID']?>/<?=$row['Picture']?>" /></td>
<?
    }
?>
</tr>
<tr>
<?
    foreach ($rs_gs as $row)
    {
?>
    <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Product_type_ID']?>/<?=$row['Picture']?>" /></td>
<?
    }
?>
</tr>
</table>