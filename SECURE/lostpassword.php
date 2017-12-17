<?php
require("config.php");
if(!isset($lost)){$lost= "no";}
if($lost == "no")

	{
	echo"
$top
<tr><td bgcolor=\"#666666\" colspan=\"7\"><font class=\"newtitle\">SSD Member Login- Password Reterieval</font></td>
</tr>

<tr>
<td bgcolor=\"#444444\" colspan=\"1\" width=\"15%\" align=\"left\" valign=\"top\"></td>
<td bgcolor=\"#444444\" colspan=\"6\" align=\"center\" valign=\"top\">
<font class=\"newtitle\">Please Verify:</font><br>
	
	<form action=lostpassword.php method=post class=\"input\">
	<font class=\"words2\">Username:<input type=text name=un class=\"input\">	<input type=hidden name=lost value=yes class=\"input\"><br>
	Reg Code:<input type=text name=reg class=\"input\"><br>
	<input type=submit value=Retrieve class=\"input\">
	</form>

	</td>
</tr>
<script src=\"../scripts/contact-copyright.js\"></script>
</table>
</div>
</div>
</body>
</html>
	
	";
	exit;
	}
if($lost == "yes")
	{
	include("accounts/ssd_$un.php");
	if($reg != $regcode)
		{
		require("config.php");
			echo"
			$top 
			<tr>
			<td bgcolor=\"#666666\" colspan=\"2\"><font class=\"newtitle\">SSD Member Sign-up- Retrtieve Password Error</font></td>
			</tr>
			<tr>
			<td bgcolor=\"#444444\" rowspan=\"7\" width=\"15%\" align=\"left\" valign=\"top\"></td>
			<td bgcolor=\"#444444\" align=\"left\" valign=\"center\">
			<font class=\"words3\"><br><br>
			Invalid Registration Code<br><br>
			Please click your BACK button and try again<br><br>
			$bottom";
			exit;
		}
	require("config.php");
	echo"
	$top
	<tr>
			<td bgcolor=\"#666666\" colspan=\"2\"><font class=\"newtitle\">SSD Member Sign-up- Retrtieve Password</font></td>
			</tr>
			<tr>
			<td bgcolor=\"#444444\" rowspan=\"7\" width=\"15%\" align=\"left\" valign=\"top\"></td>
			<td bgcolor=\"#444444\" align=\"left\" valign=\"center\">
			<font class=\"words3\"><br><br>
	Your Password Is: $mypw<br><br>Please Remember It...<br><br>
	<a href=\"index.php\" target=\"_self\" class=\"links\">Goto Login</a>
	<br><br>
	$bottom
	";
	}
?>
