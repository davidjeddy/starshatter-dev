<?php
require("login.php");
require("config.php");
require("ipaccess.php");
if(!isset($adminpw))
	{
	echo"$top $top2
	Admin Password (<font class=\"error\">Failed attempts will be logged </font>):<form action=admin.php method=post class=input><input class=\"input\" type=password name=adminpw class=\"input\">
<input class=\"input\" type=submit value=\"Login\" class=\"input\">
	</form>$bottom";
	exit;
	}
if($adminpw ==  $cfgAdminPW)
	{
	echo"$top $top2 
	<form action=settings.php method=post>
	<input class=\"input\" type=hidden name=adminpw value=$adminpw>
	<input class=\"input\" type=submit value=\"Settings\">
	</form>
	<form action=getuserinfo.php method=post>
	<input class=\"input\" type=hidden name=adminpw value=$adminpw>
	<input class=\"input\" type=submit value=\"Get User Info\">
	</form>
	<form action=iplookup.php method=post>
	<input class=\"input\" type=hidden name=adminpw value=$adminpw>
	<input class=\"input\" type=submit value=\"Find Username By IP\">
	</form>
	<form action=ipbanadmin.php method=post>
	<input class=\"input\" type=hidden name=adminpw value=$adminpw>
	<input class=\"input\" type=submit value=\"IP Ban\">
	</form>
	<form action=iplog.php method=post>
	<input class=\"input\" type=hidden name=adminpw value=$adminpw>
	<input class=\"input\" type=submit value=\"IP Log\">
	</form>
	<form action=adminlogins.php method=post>
	<input class=\"input\" type=hidden name=\"adminpw\" value=\"$adminpw\">
	<input class=\"input\" type=submit value=\"Failed Admin Logins\">
	</form>
	<form action=deleaccounts1.php method=post>
	<input class=\"input\" type=hidden name=adminpw value=$adminpw>
	<input class=\"input\" style=\"background-color:#ff0000;font:bolder;\" type=submit value=\"RESET SSD Members Area!!\">
	</form>


	$bottom";
	}
	else
	{
	$ip=getenv("REMOTE_ADDR");
	$host = gethostbyaddr($ip);
	$date=date("F j, Y  G:i:s");
	echo"$top $top2 Invalid Login  - <font class=\"error\">Attempt Logged</font> <br>$host<br>$ip<br> $date $bottom";
	$filename="failedadminlogin.txt";$file = fopen($filename, "a");
	fwrite($file, "<br>MACHINE: $host<BR>IP ADDRESS: ($ip)<br>PASSWORD TRIED: $adminpw <br>WHEN: $date<br><br>");
	fclose($file);
	exit;
	}
?>