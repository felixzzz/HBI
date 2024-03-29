<script>
    $(function() {
        $( "#catagory" ).tabs();
    });

 </script>
 <!-- TinyMCE -->
<script type="text/javascript" src="<?=base_url()?>assets/plugin/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		
		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],
	});
</script>
<!-- /TinyMCE -->

 <div id="catagory">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#cu">Contact Us</a></li>
        <li><a href="#au">About Us</a></li>
    </ul>
     
    <div id="home">
        <?
        echo form_open_multipart('admin/do_change_home_content');
        ?>
            <img src="<?=$img_url?>" width="800"/>
            <br/>
            Change : <input type="file" name="newpict"/> (Best in 960x560)
            <br/>
            <input type="submit" name="save" value="Submit" />
        </form>
    </div>     
    <div id="cu">        		
        <?
        echo form_open('admin/do_change_content/cu');
        ?>
            <div>
                <textarea id="elm1" name="value" rows="15" cols="80" style="width: 80%">
                    <?=$contact_us_content['value']?>
                </textarea>
            </div>		
            <input type="submit" name="save" value="Submit" />
            <input type="reset" name="reset" value="Reset" />
        </form>
    </div>
    <div id="au">
        <?
        echo form_open('admin/do_change_content/au');
        ?>
		<div>
                    <textarea id="elm2" name="value" rows="15" cols="80" style="width: 80%">
                        <?=$about_us_content['value']?>
                    </textarea>
		</div>		
		<input type="submit" name="save" value="Submit" />
		<input type="reset" name="reset" value="Reset" />
            </form>        
    </div>
 </div>
 
    