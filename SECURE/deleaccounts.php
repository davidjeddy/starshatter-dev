<?php
require("login.php");
require("config.php");
require("ipaccess.php");

echo"$top<br><big><b>Resseting Status</b></big><br><br>";

	$dir="accounts";
	echo"Getting File names in $dir Directory<br>";
	$handle  = @opendir("$dir");
	$f = @readdir($handle);
	$f = @readdir($handle);
	while($f = @readdir($handle))
	{
	unlink("$dir/$f");
	echo "--Deleting $f From $dir Directory <br>";
	}
	@closedir($handle);
echo"-$dir Directory Is Now Empty!<br>";
$fn="$dir/index.html";
$file1=fopen($fn, "w");
fwrite($file1, "");
fclose($file1);

echo"-Remade Index File<br>";

	$dir="ip";
	echo"Getting File names in $dir Directory<br>";
	$handle  = @opendir("$dir");
	$f = @readdir($handle);
	$f = @readdir($handle);
	while($f = @readdir($handle))
	{
	unlink("$dir/$f");
	echo "--Deleting $f From Directory $dir<br>";
	}
	@closedir($handle);
echo"$dir Directory Is Now Empty!<br>";




$fn1="profiles.lst";
$file2=fopen($fn1, "w");
fwrite($file2,"");
fclose($file2);
echo"-Cleared The Profile List<br>";
echo"---All Accounts deleted!<br>";

$fn2="iplog.php";
$file3=fopen($fn2,"w");
fwrite($file3,"<?php require(\"config.php\"); if(\$adminpw != \$cfgAdminPW){echo\"Invalid Password\";exit;} ?>");
fclose($file3);
echo"-Cleared IP Log<br>";
	$filename11="guestbook.dat";
	$file11=fopen($filename11, "w");
	fwrite($file11, "");
	fclose($file11);
echo"Guest Book Cleared<br>";
echo"-Start Clearing Forum!<br>";
	$dir="topics";
	echo"Getting File names in $dir Directory<br>";
	$handle  = @opendir("$dir");
	$f = @readdir($handle);
	$f = @readdir($handle);
	while($f = @readdir($handle))
	{
	unlink("$dir/$f");
	echo "--Deleting $f From $dir Directory<br>";
	}
	@closedir($handle);
echo"$dir Directory Is Now Empty!<br>";
	$filename1111="topics.cnt";
	$file1111=fopen($filename1111, "w");
	fwrite($file1111, "0");
	fclose($file1111);
echo"Deleting Topic Counter<br>";
	$filename111="topics.php";
	$file111=fopen($filename111, "w");
	fwrite($file111, "");
	fclose($file111);
echo"-Deleting Topics Table<br>";
copy("view.bak","topics/view.php");
echo"Restoring View.PHP<br>";
copy("xforum.gif", "topics/xforum.gif");
copy("tbg.gif", "topics/tbg.gif");
echo"Restoring Images<br>";
copy("index.bak", "topics/index.html");
echo"Restoring Topic Index<br>";
echo"Forum Erasing Complete!<br>";
echo"<br>---SSD Secure Completely Reset!!<br>";
echo"$bottom";
?>