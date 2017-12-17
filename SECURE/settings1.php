<?php
//used by settings to save the settings(admin)


$a="<";
$b="?php";
$c="?>";

$config="$a$b
\$cfgAdminPW=\"$cfgAdminPW1\";
\$top=\"$top\";
\$top2=\"$top2\";
\$bottom=\"$bottom\";
$c
";
$ban="$banned";


$fn1="config.php";
$fn2="tos.php";
$fn3="banned.php";

$f1=fopen($fn1,"w");
fwrite($f1, "$config");
fclose($f1);

$f2=fopen($fn2, "w");
fwrite($f2, "$tos");
fclose($f2);

$f3=fopen($fn3, "w");
fwrite($f3, "$ban");
fclose($f3);

header("Location: Admin.php?adminpw=$cfgAdminPW1");
?>
