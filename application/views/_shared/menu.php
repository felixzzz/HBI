<script type="text/javascript" src="<?=base_url()?>assets/script/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugin/pro_dropdown_2.css" />
<script src="<?=base_url()?>assets/plugin/stuHover.js" type="text/javascript"></script>






<ul id="nav">
	<li class="top"><?=anchor('home/index','<span>Home</span>','class="top_link"'); ?></li>
	<li class="top"><?=anchor('#','<span class="down">Product</span>','id="products" class="top_link"'); ?>
		<ul class="sub">
			<li><a href="#" class="fly">Hellobaby</a>
					<ul>						
                                                <li><?=anchor('product/hbaby_newBorn','<span>New Born</span>',''); ?></li>
                                                <li><?=anchor('product/hbaby_babyml','<span>Baby M/L</span>',''); ?></li>
                                                <li><?=anchor('product/hbaby_topBottom','<span>Top and Bottom</span>',''); ?></li>
                                                <li><?=anchor('product/hbaby_giftSet','<span>Gift Set</span>',''); ?></li>
					</ul>
			</li>			
			<li><?=anchor('product/comfortable_index','<span>Comfortable</span>',''); ?></li>
                        <!--<li><?=anchor('product/noodle_index','<span>Noodle</span>',''); ?></li>-->
		</ul>
	</li>
	<li class="top"><?=anchor('home/contactUs','<span>Contact Us</span>',' class="top_link"'); ?></li>
        <li class="top"><?=anchor('home/aboutUs','<span>About Us</span>',' class="top_link"'); ?></li>        
</ul>