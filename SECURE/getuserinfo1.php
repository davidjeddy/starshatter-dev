<?php
require("login.php");
require("config.php");
require("ipaccess.php");

if($adminpw != $cfgAdminPW){echo"$top $unauthorized $bottom";exit;}
if(!file_exists("accounts/ssd_$un.php")){echo"$top $top2 Username doesnt exist $bottom";exit;}
include("accounts/ssd_$un.php");
echo"
$top
$top2
<form action=\"chguser.php\" method=\"post\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\">

<tr>
<td colspan=\"2\"><font class=\"words2\">Account info for: $un</font></td>
</tr>

<tr>
<td><font class=\"words2\">Password:</font></td><td><input type=\"text\" name=\"mypw\" value=\"$mypw\" class=\"input\"></td>
</tr>

<tr>
<td><font class=\"words2\">Email:</font></td><td><input type=\"text\" name=\"email\" value=\"$email\" class=\"input\"></td>
</tr>

<tr>
<td><font class=\"words2\">IP Address:</font></td><td><input type=\"text\" name=\"ip\" value=\"$ip\" class=\"input\"></td>
</tr>

<tr>
<td><font class=\"words2\">Registration Code:</font></td><td><input type=\"text\" name=\"regcode\" value=\"$regcode\" class=\"input\"></td>
</tr>

<tr>
<td><font class=\"words2\">Home Page:</font></td><td><input type=\"text\" name=\"homepage\" value=\"$homepage\" class=\"input\"></td>
</tr>

<tr>
<td><font class=\"words2\">Location:</font></td><td><input type=\"text\" name=\"cn\" value=\"$location\" class=\"input\"></td>
</tr>

<tr>
<td><font class=\"words2\">Real Name:</font></td><td><input type=\"text\" name=\"realname\" value=\"$realname\" class=\"input\"></td>
</tr>

<tr>
<input type=\"hidden\" name=\"adminpw\" value=\"$adminpw\">
<td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"Save Changes\" class=\"input\">
</form>

<form action=\"deleuser.php\" method=\"post\">
<input type=hidden name=\"adminpw\" value=\"$adminpw\">
<input type=\"hidden\" name=\"un\" value=\"$un\">
<input type=\"submit\" value=\"Delete This Users Account!\" class=\"input\">
</form>


</table>

$bottom
";
?>
