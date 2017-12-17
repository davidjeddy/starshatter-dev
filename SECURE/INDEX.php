<?php
$username = '';
require("config.php");
echo"$top";?>
<tr>
	<td class="sixsix" colspan="7"><font class="newtitle">SSD Member Login</font></td>
</tr>
<tr>
	<td class="fourfour" colspan="7" align="center" valign="top">
	<font class="newtitle">Please Login:</font><br>
	
	<form action=login1.php method=post>
	<input type=hidden name=id value=0 class="input">
	<font class="words2">
	Username: <input type="text" name="username" autocomplete="on" class="input"><br>
	Password: <input type="password" name="password" class="input"><br>
	<input type=submit value="Login" class="input">
	</font></form>
	<br>
	| <a href="create.php" class="shipdesigners">Create Account</a> | <a href="lostpassword.php" class="shipdesigners">Forgot Password?</a> |<br><br><br>
	</td>
</tr>
<?PHP
echo $bottom;?>
