        <?
            echo form_open('admin/do_changePassword');
        ?>
        <table>            
            <tr>
                <td>New Password</td>
                <td><input type="password" name="newpass"/></td>
            </tr>
            <tr>
                <td>Confirm New Password</td>
                <td><input type="password" name="confpass"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Login" /></td>
            </tr>
        </table>
        </form>