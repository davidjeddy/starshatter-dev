<?php
<?php
require("login.php");
require("config.php");
require("ipaccess.php");

echo"
$top
	<center>
 <table border=1 cellpadding=1 cellspacing=0>
  <tr>
    <td colspan=3><center><b><u>Profiles</u></b></center></td>
  </tr>
  <tr><td colspan=3><center>&nbsp;</center></td></tr>
  <tr>  
    <td>Username</td><td width=50><center>&nbsp;</center></td><td>Profile</td>
  </tr>
";
include("profiles.lst");
echo"
  <tr>  
    <td colspan=3 height=10></td>
  </tr>
</table>
</center>
$bottom";
?>
