<?php
#loads config file
require("config.php");
#what if the variable username is !NOT! already set?
if(!isset($HTTP_COOKIE_VARS["username"]))
	{
#set it to $BAH to username in the cookie
		$BAH=$HTTP_COOKIE_VARS["username"];
		echo"$top <tr><td bgcolor=\"#666666\" colspan=\"2\"><font class=\"newtitle\">SSD Members Area</font></td>
</tr><tr><td bgcolor=\"#444444\" rowspan=\"7\" width=\"15%\" align=\"left\" valign=\"top\"></td><td bgcolor=\"#444444\" align=\"left\" valign=\"top\"><font class=\"words3\">You Must Be Logged In To View This Page - <a href=\"index.php\" class=\"links\">Please Login</a></font>$bottom";
#end file
		exit;
	}
#whats if username DOES equal username in the cookie
$username=$HTTP_COOKIE_VARS["username"];
#What if the accoount does NOT exist alreayd?
if(!file_exists("accounts/ssd_$username.php"))
	{
		echo"$top<tr><td bgcolor=\"#666666\" colspan=\"2\"><font class=\"newtitle\">SSD Member Sign-up</font></td></tr><tr><td bgcolor=\"#444444\" rowspan=\"7\" width=\"15%\" align=\"left\" valign=\"top\"></td><td bgcolor=\"#444444\" align=\"left\" valign=\"top\"><font class=\"words3\">The Username You Supplied Does Not Exist - <a href=create.php class=\"links\">Create It Now</a></font> $bottom";
#exit
		exit;
	}
#if it does exist
include("accounts/ssd_$username.php");
#set password
$password=$HTTP_COOKIE_VARS["password"];
#what if passwords DONT match?
if($password != $mypw)
	{
		echo"$top<tr><td bgcolor=\"#666666\" colspan=\"2\"><font class=\"newtitle\">SSD Member Sign-up</font></td></tr><tr><td bgcolor=\"#444444\" rowspan=\"7\" width=\"15%\" align=\"left\" valign=\"top\"></td><td bgcolor=\"#444444\" align=\"left\" valign=\"top\"><font class=\"words3\">The Password Was Not Correct For This Username $bottom";
#exit
		exit;
	}
?>
