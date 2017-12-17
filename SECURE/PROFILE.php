<?php
<?php
require("login.php");
require("config.php");
require("ipaccess.php");

if(!file_exists("accounts/ssd$QUERY_STRING.php")){echo"$top Username does not exist - User Account has been deleted! $bottom";exit;}

include("accounts/ssd_$QUERY_STRING.php");

echo"
$top<center>
<table border=1 cellpadding=0 cellspacing=0>
<tr><td colspan=2><center>$QUERY_STRING's Profile</center></td></tr>
<tr><td>Username</td><td>$username</td></tr>
<tr><td>Realname</td><td>$realname</td></tr>
<tr><td>Email</td><td><a href=mailto:$email>$email</a></td></tr>
<tr><td>Gender</td><td>$gender</td></tr>
<tr><td>Age</td><td>$age</td></tr>
<tr><td>Location</td><td>$location</td></tr>
<tr><td>Home Page</td><td>";
if(!strstr($homepage, "http://"))
	{
	$homepage="http://$homepage";
	}
	echo"<a href=$homepage>$homepage</a>";
	
echo"
</td></tr>
</table></center>
$bottom
";
?>
