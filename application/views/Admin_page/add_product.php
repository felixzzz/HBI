<html>
    <body>        
        <script>
            function checkCatagory()
            {
                var cat = document.getElementById("brand_id").value;
                if(cat=="hb")
                {
                    document.getElementById("product_type").style.visibility="visible";
                }
                else
                {
                    document.getElementById("product_type").style.visibility="hidden";
                }                
            }
        </script>
        <?
            echo form_open_multipart('admin/doAddProduct');
        ?>
        <table>
            <tr>
                <td>Product ID</td>
                <td>
                    <input type="text" name="product_id"/>                   
                </td>
            </tr>
            <tr>
                <td>Brand</td>
                <td>
                    <select name="brand_id" id="brand_id" onchange="checkCatagory()">                        
                        <?
                        foreach ($brand as $row)
                        {                    
                        ?>                        
                        
                        <option value="<?=$row['Brand_ID']?>" <?if($row['Brand_ID']=="hb"){echo "selected";}?> ><?=$row['Brand_name']?></option> 	
                        <?
                        }
                        ?>
                    </select>            
                </td>
            </tr>
            
            <tr id="product_type">
                <td>Product Type</td>
                <td>
                    <select name="product_type_id">
                    <?
                    foreach ($product_type as $row)
                    {                    
                    ?>
                    <option value="<?=$row['Product_Type_Id']?>" ><?=$row['Product_Type_Name']?></option> 	
                    <?
                    }
                    ?>
                    </select>   
                </td>
            </tr>
            
            <tr>
                <td>Description</td>
                <td><input type="text" name="description"/></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"/></td>
            </tr>
            <tr>
                <td>Packaging</td>
                <td><input type="text" name="packaging"/></td>
            </tr>
            <tr>
                <td>Picture</td>
                <td>
                    <input type="file" name="picture"/>
                    <?=$err?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="button" value="Back" onclick="window.location.href='<?=base_url()?>admin/adminIndex'"/> <input type="submit" value="Add Product"/></td>
            </tr>
        </table>
        </form>
        <script>
            checkCatagory();
        </script>
    </body>
</html>