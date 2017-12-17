<?php
require("login.php");
require("config.php");
require("ipaccess.php");
//put failedadminlogin.txt into a string
$filename = "failedadminlogin.txt";
$fd = fopen ($filename, "rb");
$contents = fread ($fd, filesize ($filename));
fclose ($fd);



echo"
$top
<tr><td bgcolor=\"#666666\" colspan=\"7\" align=\"left\"><font class=\"newtitle\">SSD Member Area - Admin Logins</font></td>
	</tr>
	<tr><td bgcolor=\"#444444\" colspan=\"1\" width=\"15%\" align=\"center\" valign=\"top\"></td>
	<td bgcolor=\"#444444\" colspan=\"6\" align=\"left\" valign=\"top\"><font class=\"red\">

$contents

</font></td></tr>
$bottom";?>
