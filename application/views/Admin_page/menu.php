<div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header">MENU</li>                
        <li <?if($cat=="product"){ echo 'class="active"'; }?>><a href="<?=base_url()?>admin/adminIndex"> Product</a></li>    
        <li <?if($cat=="header_footer"){ echo 'class="active"'; }?>><a href="<?=base_url()?>admin/adminIndex/header_footer"> Header & Footer</a></li>
        <li <?if($cat=="content"){ echo 'class="active"'; }?>><a href="<?=base_url()?>admin/adminIndex/content"> Content</a></li>
        <li <?if($cat=="change_password"){ echo 'class="active"'; }?>><a href="<?=base_url()?>admin/adminIndex/change_password"> Change password</a></li>
        <li><a href="<?=base_url()?>admin/do_logout"> Logout </a></li>
    </ul>
</div><!--/.well -->
