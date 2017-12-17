<?php
require("config.php");
// file used for a user to update account

	if($realname == ''||$email == ''||$cn == ''||$mypw == ''){echo"$top $top2 All Fields Are Required! - Please go back and try again. $bottom"; exit;}
	if(is_int($ag)){echo"$top Invalid Age. $bottom";exit;}
	if(!strstr($email, '@') || !strstr($email, '.')){echo"$top $top2 Invalid Email - Please go back and try again. $bottom.";exit;}

$ip=GETENV("REMOTE_ADDR");
$a="<";
$b="?php";
$c="?>";

$myaccount="$a$b

\$mypw=\"$mypw\";
\$email=\"$email\";
\$regcode=\"$regcode\";
\$ip=\"$ip\";
\$homepage=\"$homepage\";
\$location=\"$cn\";
\$realname=\"$realname\";
\$username=\"$username\";
$c";
$fn="accounts/ssd_$username.php";
$f=fopen($fn, "w");
fwrite($f, "$myaccount");
fclose($f);

$fn1="ip/$ip";
$f1=fopen($fn1, "w");
fwrite($f1,"$username");
fclose($f1);

header("Location: index1.php");
?>