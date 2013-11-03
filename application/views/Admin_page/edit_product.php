<?
    echo form_open_multipart('admin/doEditProduct');
?>
<table>
    <tr>
        <td>Product ID</td>
        <td>
            <input type="text" value="<?=$rs['Product_ID']?>" name="product_id"/>
            <input type="hidden" value="<?=$rs['Product_ID']?>" name="pid"/>
        </td>
    </tr>
    <tr>
        <td>Brand</td>
        <td>
            <select name="brand_id">
                <?
                foreach ($brand as $row)
                {                    
                ?>
                <option value="<?=$row['Brand_ID']?>" <?if($row['Brand_ID']==$rs['Brand_ID']){?>selected="selected"<?}?>><?=$row['Brand_name']?></option> 	
                <?
                }
                ?>
            </select>            
        </td>
    </tr>
    <?
        if($rs['Brand_ID']=="hb")
        {
    ?>
        <tr>
            <td>Product Type</td>
            <td>
                <select name="product_type_id">
                <?
                foreach ($product_type as $row)
                {                    
                ?>
                <option value="<?=$row['Product_Type_Id']?>" <?if($row['Product_Type_Id']==$rs['Product_type_ID']){?>selected="selected"<?}?>><?=$row['Product_Type_Name']?></option> 	
                <?
                }
                ?>
                </select>   
            </td>
        </tr>
    <?
        }
    ?>
    <tr>
        <td>Description</td>
        <td><input type="text" name="description" value="<?=$rs['Description']?>"/></td>
    </tr>
    <?
        if($rs['Brand_ID']=="hb")
        {
    ?>
    <tr>
        <td>Age</td>
        <td><input type="text" name="age" value="<?=$rs['Age']?>"/></td>
    </tr>
    <tr>
        <td>Packaging</td>
        <td><input type="text" name="packaging" value="<?=$rs['Packaging']?>"/></td>
    </tr>
    <?
        }
    ?>
    <tr>
        <td>Picture</td>
        <td><input type="file" name="picture" value="<?=$rs['Picture']?>"/> <?=$error?></td>
    </tr>
    <tr>
        <td colspan="2"><input type="button" value="Back" onclick="window.location.href='<?=base_url()?>admin/adminIndex'"/> <input type="submit" value="Edit"/></td>
    </tr>
</table>
</form>