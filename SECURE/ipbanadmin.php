<?php
require("login.php");
require("config.php");
require("ipaccess.php");
if($adminpw != $cfgAdminPW){echo"$top $unauthorized $bottom"; exit;}
if(!isset($adminpw))
{echo"$top $top2 
<form action=ipbanadmin.php method=post>
<table border=0 cellpadding=0 cellspacing=0>
<tr><td>Password</td><td><input type=password name=adminpassword class=\"input\"></td></tr>
</table><center><input type=submit value=\"Login\"></center></form>$bottom";}
else
{if($adminpw != $cfgAdminPW){
$ip=getenv("REMOTE_ADDR");
$host = gethostbyaddr($ip);
$date=date("F j, Y  G:i:s");
echo"$top Invalid Login $bottom - Attempt Logged ($host($ip) on $date)";
$filename="failedloginattempts.txt";$file = fopen($filename, "a");
fwrite($file, "$host($ip) tried to use Password : $adminpw on $date<br>")
;fclose($file);
exit;}
else{if($save != 'yes')
{
require("ipbanlist.php");
echo"
$top
$top2

Banned IP Address
<br>Add this at the top of your source of a new page to keep banned out:<textarea cols=40 rows=1><?php require(\"ipaccess.php\"); ?></textarea><br>
<center><form action=ipbanadmin.php method=post>

 <input type=hidden name=adminpw value=$adminpw>
Banned IP : <input type=text name=ip1 value=$ip1><br>
Banned IP : <input type=text name=ip2 value=$ip2><br>
Banned IP : <input type=text name=ip3 value=$ip3><br>
Banned IP : <input type=text name=ip4 value=$ip4><br>
Banned IP : <input type=text name=ip5 value=$ip5><br>
Banned IP : <input type=text name=ip6 value=$ip6><br>
Banned IP : <input type=text name=ip7 value=$ip7><br>
Banned IP : <input type=text name=ip8 value=$ip8><br>
Banned IP : <input type=text name=ip9 value=$ip9><br>
Banned IP : <input type=text name=ip10 value=$ip10><br>
Banned IP : <input type=text name=ip11 value=$ip11><br>
Banned IP : <input type=text name=ip12 value=$ip12><br>
Banned IP : <input type=text name=ip13 value=$ip13><br>
Banned IP : <input type=text name=ip14 value=$ip14><br>
<center><input type=hidden name=save value=yes><input type=submit value=\"Save Changes\"></center>
</form>
$bottom
";exit;}
if($save == 'yes')
{
$a="<";
$b="?php ";
$c="?>";
$ipban="$a$b
\$ip1='$ip1';
\$ip2='$ip2';
\$ip3='$ip3';
\$ip4='$ip4';
\$ip5='$ip5';
\$ip6='$ip6';
\$ip7='$ip7';
\$ip8='$ip8';
\$ip9='$ip9';
\$ip10='$ip10';
\$ip11='$ip11';
\$ip12='$ip12';
\$ip13='$ip13';
\$ip14='$ip14';
$c";

$filename="ipbanlist.php";
$file = fopen($filename, "w");
fwrite($file, "$ipban");
fclose($file);echo"<meta http-equiv=\"refresh\" content=\"0 url=admin.php?adminpw=$adminpw\">";
}
}}

?>
