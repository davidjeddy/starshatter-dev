<?php
require("login.php");
require("config.php");
require("ipaccess.php");

if($adminpw != $cfgAdminPW){echo"$top $unauthorized $bottom";exit;}
if(!isset($iplookup)){$iplookup="no";}

if($iplookup == 'no')
	{
	echo"
	$top
	$top2
	<center>
	Enter A Ip To Find Who Is Using It
	<form action=iplookup.php method=post>
	<input type=text name=ip>
	<input type=hidden name=iplookup value=yes>
	<input type=hidden name=adminpw value=$adminpw>
	<input type=submit value=\"Look Up\">
	</center>
	$bottom
	";
	exit;
	}
if($iplookup == 'yes')
	{
	if(!file_exists("ip/$ip")){echo"$top No User has used this IP $bottom";exit;}
	$filename="ip/$ip";
	$file=fopen($filename, "r");
	$name=fread($file, filesize($filename));
	fclose($file);
	echo"
	$top
	$top2
	The IP you Looked Up Returned The Username<br>
	<textarea rows=\"7\" cols=\"27\" scrolling=\"no\" class=\"input\">$name</textarea>
	$bottom
	";
	}
?>
