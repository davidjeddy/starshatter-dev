<?php
include("login.php");
require("config.php");
include("ipaccess.php");

echo"
$top
$top2


<table align=\"center\" border=\"0\" cellpadding=0 cellspacing=0 bordercolor=\"#666666\">
<form action=myaccount1.php method=post>
 <tr>
  <td colspan=\"2\"><font class=\"newtitle\">User Profile</font></td>
 </tr>
 <tr>
  <td><font class=\"words3\">Username</font></td>
  <td><font class=\"words1\">$username</font></td>
 </tr>
<input class=\"input\"  type=hidden name=username value=\"$username\">
 <tr>
  <td><font class=\"words3\">Password</font></td>
  <td><input class=\"input\"  type=text name=mypw value=\"$mypw\"></td>
 </tr>
 <tr>
  <td><font class=\"words3\">Email</font></td>
  <td><input class=\"input\"  type=text name=email value=\"$email\"></td>
 </tr>
 <tr>
  <td><font class=\"words3\">Real Name : </font></td>
  <td><input class=\"input\"  type=text name=realname value=\"$realname\"></td>
 </tr>

 <tr>
  <td><font class=\"words3\">HomePage :</font></td>
  <td><input class=\"input\"  type=text name=homepage value=\"$homepage\"></td>
 </tr>
 <tr>
  <td><font class=\"words3\">Location(City, Country) :</font></td>
  <td><input class=\"input\"  type=text name=cn value=\"$location\"></td>
 </tr>
 <tr>
  <td><font class=\"words3\">Registration Code</font></td>
  <td><font class=\"words1\">$regcode</font></td>
 </tr>
  <input class=\"input\"  type=hidden name=regcode value=$regcode>
 <tr>
  <td colspan=2><center><input class=\"input\"  type=submit value=Update class=\"input\"></center></font></font></td>
 </tr>
</table>
</form>
</center>
$bottom
";
?>
