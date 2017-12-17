<?php
require("login.php");
require("config.php");
require("ipaccess.php");

if($adminpw != $cfgAdminPW){echo"$top $unauthorized $bottom"; exit;}
echo"
$top
$top2"?>

<table border="0" width="100%" height="100%" bordercolor="ffff00"> 
<form action="settings1.php" method="post">

<tr><td><font class="words2">Administrator Password: </font>
<input class="input" type=text name=cfgAdminPW1 value=<?php echo"$cfgAdminPW"; ?>></font></tr>
<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

<tr>
<td><font class="words2">Top HTML Code: </font></td></tr>
<td><font class="words2"><textarea name=top rows=25 cols=75 class="textarea"><?php echo"$top"; ?></textarea></font>
</tr>
<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr
><tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

<tr>
<td><font class="words2">Top Menu HTML Code: </font></td></tr>
<td><font class="words2"><textarea name=top rows=25 cols=75 class="textarea"><?php echo"$top2"; ?></textarea></font>
</tr>
<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr
><tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

<tr><td><font class="words2">Bottom HTML Code: </font></td></tr>
<td><font class="words2"><textarea name=top rows=25 cols=75 class="textarea"><?php echo"$bottom"; ?></textarea></font></tr>
<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

<tr><td><font class="words2">Banned Message: </font></td></tr>
<td><font class="words2">
<textarea name=top rows=25 cols=75 class="textarea"><?php include("banned.php"); echo"$banned"; ?>
</textarea>
</font></tr>


<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td><font class="words2">Terms Of Service (working on this part): </font></td></tr>
<td><font class="words2"><textarea name=top rows=25 cols=75 class="textarea"><?php include("tos.php"); ?></textarea></font></tr>

<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<input class="input" type=hidden name=adminpw value=<?php echo"$adminpw"; ?>>
<tr><td colspan=2><center><input class="input" type=submit value=Save></center></font></tr>
</table>

<?PHP echo"$bottom";?>
