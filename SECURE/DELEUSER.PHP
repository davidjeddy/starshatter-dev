<?php
require("login.php");
require("config.php");
require("ipaccess.php");

if($adminpw != $cfgAdminPW){echo"$top $unauthorized $bottom";exit;}

if(!isset($delete))
	{
	echo"
	$top
	$top2
	Are You Sure You Want To Delete The User $un ??
	<form action=deleuser.php method=post>
	<input type=hidden name=delete value=yes>
	<input type=hidden name=user value=$un>
	<input type=hidden name=adminpw value=$adminpw>
	<input type=submit value=\"Yes Delete Now!\" class=\"input\">
	</form>
	<form action=deleuser.php method=post>
	<input type=hidden name=delete value=no>
	<input type=hidden name=adminpw value=$adminpw>
	<input type=submit value=\"No Do Not Delete!\" class=\"input\">
	</form>
	$bottom";
	exit;
	}
if($delete == 'yes')
	{
	unlink("accounts/ssd_$user.php");
	$fn="profiles.lst";
	$f=fopen($fn, "r");
	$data=fread($f,filesize($fn));
	fclose($f);
	$data = str_replace("<tr><td>$user</td><td width=50>&nbsp;</td><td><a href=profile.php?$user>Profile</a></td></tr>", "",$data);

	$f1=fopen($fn,"w");
	fwrite($f1,"$data");
	fclose($f1);
	echo"<meta http-equiv=refresh content=\"0 url=Admin.php?adminpw=$adminpw\">";
	}
if($delete == 'no')
	{
	echo"<meta http-equiv=refresh content=\"0 url=Admin.php?adminpw=$adminpw\">";
	}
?>
