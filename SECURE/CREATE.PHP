<?php
$username = '';
if(!isset($create)){$create="";}
require("regcodegen.php");
require("config.php");
include("ipaccess.php");
if($create != 'yes')
	{
	echo"$top
	
	<tr><td class=\"sixsix\" colspan=\"7\"><font class=\"newtitle\">SSD Member Sign-up</font></td>
</tr>

<tr>
<td class=\"fourfour\" colspan=\"1\" width=\"15%\" align=\"left\" valign=\"top\"></td>
<td class=\"fourfour\" colspan=\"6\" align=\"left\" valign=\"top\">
	
	
	
	<p align=\"center\"><font class=\"newtitle\">SSD Members Registration</font class=\"newtitle\"><br><font>***ALL FIELDS REQUIRED***</font><br><br><br>
	<table cellspacing=3 cellpadding=\"3\" align=center border=\"0\" bordercolor=\"#sixsix\">
	<form action=create.php method=post ></td></tr>
	<tr>
	<td colspan=2 align=\"center\"><font class=\"newtitle\">Sign Up Form</font></td>
	</tr>
	<tr><td><font class=\"words1\">Real Name : </td><td><input type=text name=rn class=\"input\"></td></tr>
	<tr><td><font class=\"words1\">Location(City, Country) :</td><td><input type=text name=cn class=\"input\"></td></tr>
	<tr><td><font class=\"words1\">Email : </td><td><input type=text name=em class=\"input\"></td></tr>
	<tr><td><font class=\"words1\">HomePage : </td><td><input type=text name=hp class=\"input\"></td></tr>
	<tr><td><font class=\"words1\">Create User Name : </td><td><input type=text name=un class=\"input\" maxlength=\"16\"></td></tr>
	<tr><td><font class=\"words1\">Create a password : </td><td><input type=password name=pw1 class=\"input\"></td></tr>
	<tr><td><font class=\"words1\">Confirm Password</td><td><input type=password name=pw2 class=\"input\"></td></tr>
	<tr><td colspan=2><center><font class=\"words1\">Enter The Registration code in the box :<br><font class=\"screeniewords\">$regCode</font><br><input type=hidden name=reg value=$regCode><input type=text name=reg1 class=\"input\"><br><font class=\"red\">Registration code for password retrieval.<br><br> WRITE THIS DOWN AND KEEP IN A SAFE PLACE!</font></td></tr>
	
	<tr><td colspan=2 align=\"center\"><font class=\"words2\">Do you accept the <a href=tos.php class=\"links\" target=\"_new\">Terms of Service</a></font><br><br>
	|<input type=radio name=create value=yes class=\"input\"><font class=\"words2\">Yes|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font><input type=radio name=ca value=no class=\"input\"><font class=\"words2\">No|</font></td></tr>
	<tr><td colspan=2 align=\"center\"><input type=submit value=\"Create Account!\" class=\"input\"></td></tr></table>
	</form>
	
	</center>
	$bottom
	";exit;
	}

//rule checking

if($create == 'yes')
{//top
	echo"$top <tr><td class=\"sixsix\" colspan=\"7\" align=\"left\"><font class=\"newtitle\">SSD Member Sign-Up</font></td>	</tr>
	<tr><td class=\"fourfour\" colspan=\"1\" width=\"15%\" align=\"center\" valign=\"top\"></td>
	<td class=\"fourfour\" colspan=\"6\" align=\"center\" valign=\"top\"><font class=\"red\">";
	//just checking...
	if(strstr($un, 'index')||strstr($un, 'cgi')||strstr($un, 'email')||strstr($un, 'html')||strstr($un, '/')){echo" Illegal Username $bottom";exit;}
	if(strstr($un, ' ')){echo" Spaces not allowed in username - hit back button. $bottom.";exit;}
	if(!strstr($em, '@') || !strstr($em, '.')){echo" Invalid Email $bottom.";exit;}
	if($pw1 != $pw2){echo" Passwords Do Not Match - Hit Your Back Button $bottom"; exit;}
	if($un == ''||$pw1 == ''||$rn == ''||$em == ''||$cn == ''){echo" All Fields Are Required!  $bottom"; exit;}
	if($reg != $reg1){echo" The Registration Code Was Not Matching - Hit Browser Back Button $bottom"; exit;}




$homepage = $hp;
$ip=getenv("REMOTE_ADDR");
$username="$un";
$password="$pw1"; 		  
$realname="$rn";
$email="$em";
$country=$cn;
$date=date("F j, Y");
$a="<";
$b="?php ";
$c="?>";


//ip log
$iplog="Username : $username  |  IP : $ip<br>";

//add profile to profile index
$profileindex="<tr><td>$username</td><td width=50>&nbsp;</td><td><a href=profile.php?$username>Profile</a></td></tr>";





//login info
$logininfo="
$a$b
\$mypw=\"$password\";
\$email=\"$email\";
\$regcode=\"$reg\";
\$ip=\"$ip\";
\$gender=\"$gender\";
\$homepage=\"$homepage\";
\$location=\"$country\";
\$age=\"$age\";
\$realname=\"$realname\";
\$username=\"$username\";
$c
";




//-------------------------------------
//---- saving codes ----------
//--------------------------------------

if(file_exists("accounts/ssd_$username.php"))
	{
		print(" Someone Has Already Chose That Username  - Please Hit Your Back Button<BR> Or you refreashed your browser. $bottom");exit;
	}
else
	{
		//save profile
		$file_name = "profiles.lst"; 
		$file_pointer = fopen("$file_name", "ab"); 
		fwrite($file_pointer, "$profileindex"); 
		fclose($file_pointer); 


		//save member info
		$file_name1 = "accounts/ssd_$username.php"; 
		$file_pointer1 = fopen("$file_name1", "a"); 
		fwrite($file_pointer1, "$logininfo"); 
		fclose($file_pointer1); 


		//save iplog
		$file_name2 = "iplog.php"; 
		$file_pointer2 = fopen("$file_name2", "ab"); 
		fwrite($file_pointer2, "$iplog"); 
		fclose($file_pointer2);



//$f=fopen($writefile, "wb+");
//writes info to file
//fwrite($f,"
		//$fn1="ip/$ip";
		//$f1=fopen($fn1, "wb");
		//fwrite($f1,$iplog);
		//fclose($f1);
		//save iplog
		$file_name3 = "ip/$ip.txt"; 
		$file_pointer3 = fopen("$file_name3", "ab"); 
		fwrite($file_pointer3, "$iplog"); 
		fclose($file_pointer3);



		//make user dir
		//chdir(memfiles);
		//mkdir(memfiles/$username, 0700);
		//rewinddir(memfiles);



print "


Account Created Successfully<br>
Username=$username<br>
Registration Code=$reg<br>
Keep this info as it will be used to<br>
retrieve your password if forgotten!<br>
(do not share you reg code!)<br></font><BR><BR>
<a href=\"index.php\" target=\"_self\" class=\"links\">Return to Login</a>



$bottom
";}}
?>
