<html>
    <body>
        <?
            echo form_open('login/do_login');
        ?>
        <table>
            <tr>
                <td colspan="2"><center>Login</center></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Login"/></td>                
            </tr>
        </table>
        
        <a href="<?=base_url()?>login/forget_password"> Forget password</a>
    </form>
       
    </body>
</html>