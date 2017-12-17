<?php
require("login.php");
require("config.php");
require("ipaccess.php");
if($adminpw != $cfgAdminPW){echo"$top $unauthorized $bottom";exit;}

$fn="accounts/ssd_$un.php";
$a="<";
$b="?php";
$c="?>";

$userinfo="$a$b

\$mypw=\"$mypw\";
\$email=\"$email\";
\$regcode=\"$regcode\";
\$ip=\"$ip\";
\$gender=\"$gender\";
\$homepage=\"$homepage\";
\$location=\"$location\";
\$age=\"$age\";
\$realname=\"$realname\";
\$username=\"$username\";
$c";
$f=fopen($fn, "w");
fwrite($f, "$userinfo");
fclose($f);

header("Location: Admin.php?adminpw=$adminpw");
?>
