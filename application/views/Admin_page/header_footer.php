<script>
    $(function() {
        $( "#catagory,#footer_catagory,#header_catagory" ).tabs();
    });

 </script>
 
 <div id="catagory">
    <ul>
        <li><a href="#header">Header</a></li>
        <li><a href="#footer">Footer</a></li>
    </ul>
     
    <div id="header">        
        <div id="header_catagory">
            <ul>
                <li><a href="#header_bg">Background</a></li>
                <li><a href="#header_fb">Facebook</a></li>
                <li><a href="#header_hb">Sticker</a></li>                
            </ul>
            <div id="header_bg">
                <?
                echo form_open_multipart('admin/do_change_home_content');
                ?>
                    <img src="<?=$header["bg"]?>" width="800"/>
                    <br/>
                    Change : <input type="file" name="newpict"/> (Best in : 960x100)
                    <br/>
                    <input type="submit" name="save" value="Submit" />
                </form>
            </div>
            <div id="header_fb">
                <?
                echo form_open_multipart('admin/do_change_home_content');
                ?>
                    <img src="<?=$header["fb"]?>" width="100"/>
                    <br/>
                    Change : <input type="file" name="newpict"/> (Best in : 960x100)
                    <br/>
                    Facebook URL : <input type="text" name="fb"/>
                    <br/>
                    <input type="submit" name="save" value="Submit" />
                </form>
            </div>
            <div id="header_hb">
                <?
                echo form_open_multipart('admin/do_change_home_content');
                ?>
                    <img src="<?=$header["hb"]?>" width="100"/>
                    <br/>
                    Change : <input type="file" name="newpict"/> (Best in : 960x100)
                    <br/>
                    <input type="submit" name="save" value="Submit" />
                </form>
            </div>
        </div>
    </div>
     
    <div id="footer">
        <div id="footer_catagory">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#cu">Contact Us</a></li>
                <li><a href="#au">About Us</a></li>                
            </ul>
            <div id="home">
                <?
                echo form_open_multipart('admin/do_change_home_content');
                ?>
                    <img src="<?=$footer["home"]?>" width="100"/>
                    <br/>
                    Change : <input type="file" name="newpict"/> (Best width in : 960)
                    <br/>
                    <input type="submit" name="save" value="Submit" />
                </form>
            </div>
            <div id="cu">
                <?
                echo form_open_multipart('admin/do_change_home_content');
                ?>
                    <img src="<?=$footer["au"]?>" width="100"/>
                    <br/>
                    Change : <input type="file" name="newpict"/> (Best width in : 960)
                    <br/>
                    <input type="submit" name="save" value="Submit" />
                </form>
            </div>
            <div id="au">
                <?
                echo form_open_multipart('admin/do_change_home_content');
                ?>
                    <img src="<?=$footer["cu"]?>" width="100"/>
                    <br/>
                    Change : <input type="file" name="newpict"/> (Best width in : 960)
                    <br/>
                    <input type="submit" name="save" value="Submit" />
                </form>
            </div>
        </div>
    </div>
 </div>