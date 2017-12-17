<?php
require("login.php");
require("config.php");
require("ipaccess.php");

if($adminpw != $cfgAdminPW){echo"$top $unauthorized $bottom";exit;}
echo"
$top
$top2
<form action=\"getuserinfo1.php\" method=\"post\">
Username To Lookup: <input type=\"text\" name=\"un\" class=\"input\">
<input type=\"hidden\" name=\"adminpw\" value=\"$adminpw\">
<input type=\"submit\" value=\"Look Up\" class=\"input\">
</form>
$bottom
";
?>
