<script>
    $(function() {
        $( "#product,#hb_product" ).tabs();
    });

 </script>
<a href="<?=base_url()?>admin/addProduct/"><h3>Add Product</h3> </a>
<div id="product">
    <ul>
        <li><a href="#hb">Hellobaby</a></li>
        <li><a href="#cf">Comfortable</a></li>

    </ul>
    <div id="hb">
        <div id="hb_product">
            <ul>
                <li><a href="#nb">New born</a></li>
                <li><a href="#ml">Baby M/L</a></li>
                <li><a href="#tb">Top/bottom</a></li>
                <li><a href="#gs">Gift Set</a></li>
            </ul>
            <div id="nb">
                <table class="product">
                    <?
                    foreach ($hb_nb as $row)
                    {
                    ?>
                        <tr>	
                            <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Product_type_ID']?>/<?=$row['Picture']?>"  width="100%"/></td>

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
                            <td>
                                <a href="<?=base_url()?>admin/editProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/edit.png"/></a>
                            </td>
                            <td>
                                <a href="<?=base_url()?>admin/doDeleteProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/Delete.png"/></a>                                        
                            </td>
                        </tr>
                    <?
                    }
                    ?>
                </table>
            </div>
            <div id="ml">
                <table class="product">
                    <?
                    foreach ($hb_ml as $row)
                    {
                    ?>
                        <tr>	
                            <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Product_type_ID']?>/<?=$row['Picture']?>"  width="100%"/></td>

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
                            <td>
                                <a href="<?=base_url()?>admin/editProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/edit.png"/></a>
                            </td>
                            <td>
                                <a href="<?=base_url()?>admin/doDeleteProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/Delete.png"/></a>                                        
                            </td>
                        </tr>
                    <?
                    }
                    ?>
                </table>
            </div>
            <div id="tb">
                <table class="product">
                    <?
                    foreach ($hb_tb as $row)
                    {
                    ?>
                        <tr>	
                            <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Product_type_ID']?>/<?=$row['Picture']?>"  width="100%"/></td>

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
                            </td>
                            <td>
                                <a href="<?=base_url()?>admin/editProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/edit.png"/></a>
                            </td>
                            <td>
                                <a href="<?=base_url()?>admin/doDeleteProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/Delete.png"/></a>                                        
                            </td>
                        </tr>
                    <?
                    }
                    ?>
                </table>
            </div>
            <div id="gs">
                <table class="product">
                    <?
                    foreach ($hb_gs as $row)
                    {
                    ?>
                        <tr>	
                            <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Product_type_ID']?>/<?=$row['Picture']?>"  width="100%"/></td>

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
                            </td>
                            <td>
                                <a href="<?=base_url()?>admin/editProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/edit.png"/></a>
                            </td>
                            <td>
                                <a href="<?=base_url()?>admin/doDeleteProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/Delete.png"/></a>                                        
                            </td>
                        </tr>
                    <?
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div id="cf">                
            <table class="product">
            <?
                $i =0;
                foreach ($cf as $row)
                {
                    if($i %2==0)
                    {
            ?>
                    <tr bgcolor="#81D2A7">
                        <td valign="top"><?=$row['Description']?></td>
                        <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Picture']?>" /></td>    
                        <td>
                            <a href="<?=base_url()?>admin/editProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/edit.png"/></a>
                        </td>
                        <td>
                            <a href="<?=base_url()?>admin/doDeleteProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/Delete.png"/></a>                                        
                        </td>
                    </tr>
            <?
                    }
                    else
                    {
            ?>
                    <tr bgcolor="#FFFD7F">
                        <td valign="top"><?=$row['Description']?></td>
                        <td><img src="<?=base_url()?>assets/img/Product/<?=$row['Brand_ID']?>/<?=$row['Picture']?>" /></td>    
                        <td>
                            <a href="<?=base_url()?>admin/editProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/edit.png"/></a>
                        </td>
                        <td>
                            <a href="<?=base_url()?>admin/doDeleteProduct/<?=$row['Product_ID']?>"> <img src="<?=base_url()?>assets/img/ico/Delete.png"/></a>                                        
                        </td>
                    </tr>

            <?
                    }
                    $i++;
                }
            ?>
            </table>
    </div>            
</div>