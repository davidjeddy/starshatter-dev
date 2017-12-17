<?php
require("login.php");
require("config.php");
require("ipaccess.php");



echo"
$top
<tr><td bgcolor=\"#666666\" colspan=\"7\"><font class=\"newtitle\">SSD Members Area- !!!!!!!RESET!!!!!!!!</font></td>
</tr>

<tr>
<td bgcolor=\"#444444\" colspan=\"1\" width=\"15%\" align=\"left\" valign=\"top\"></td>
<td bgcolor=\"#444444\" colspan=\"6\" align=\"left\" valign=\"top\">
<font class=\"red\">
";
?>


Are you sure you want to RESET the whole SSD Members section?. /this will erase all accounts, accoutn profiles, profiles, (It will NOT  reset your settings!)
<form action=admin.php method=post>
<input type=hidden name=adminpw value=<?php echo"$adminpw"; ?>>
<input type=submit value="NO!!! Do Not Reset SSD Members area!!!"  class="input">
</form><br><br>

<form action=deleaccounts.php method=post>
<input type=hidden name=adminpw value=<?php echo"$adminpw"; ?> >
<input type=submit value="Yes Do Reset SSD Members area!!!" class="input">
</form>
<?php
echo"$bottom";
?>
