<html>
<HEAD>
<?PHP
include('SCRIPTS/executetime.php');
?>
<title>Starshatter Dev. - the place to find stuff you won't find anywhere else.</title>
<meta http-equiv="Content-Type" content="text/HTML; charset=iso-8859-1">
<meta name="author" content="Pheagey Grean">
<meta name="keywords" content="Starshatter, MODs, MOD, def files, meshs, 3D meshs, SS">
<meta name="description" content="A leading sourch for Stashatter MOD info.">
<meta name="reply-to" content="p_grean@hotmail.com">
<meta http-equiv="expires" content="30">

<STYLE>
IMG {behavior:url("SCRIPTS/pngbehavior.htc");}
</STYLE>
<LINK title="main" href="css/main.css" type="text/css" rel="stylesheet">
<LINK title="windef" href="css/windef.css" type="text/css" rel="alternate stylesheet">
<LINK title="aqublu" href="css/aqublu.css" type="text/css" rel="alternate stylesheet">
<!--used to change css's-->
<SCRIPT src="SCRIPTS/styleswitcher.js" type="text/javascript"></SCRIPT>
<SCRIPT language="JavaScript">
icon_image = new Image();
icon_image.src="ssd.ico";
</SCRIPT>
<LINK REL="SHORTCUT ICON" HREF="ssd.ico" >
<SCRIPT LANGUAGE=javascript src="SCRIPTS/lines.js"></SCRIPT>
</HEAD>
<body onResize="resizeBars();" onLoad="resizeBars(); setEvents(); checkOpera();"  bottommargin="0" marginheight="0" marginwidth="0" rightmargin="0" scroll="yes" topmargin="0" leftmargin="0">
<!--used to show the menu-->
<SCRIPT language=JavaScript src="SCRIPTS/menu_array.js"type="text/javascript"></SCRIPT>

<script src="SCRIPTS/titlelines.js"></script>
<script src="SCRIPTS/menu.js"></script>
<div class="bodytable">




<table width="775" align="center" cellpadding="7" cellspacing="7" border="0" bordercolor="#0000ff" >
	<tr>
		<td class="sixsix" colspan="2"><font class="newtitle">Medium Ship - things to shoot at...</font>
		</td>
		<td rowspan="99" width="100" class="fourfour" height="100%" valign="top">
		<script src="SCRIPTS/rightsidemenu.js"></script>
		</td>
	</tr>
	<tr>
		<td class="fourfour" rowspan="7" width="15%" align="left" valign="top">
		<font class="lgshipdesigners">Authors:<br>
</font>
		</td>
		<!--middle column-->
	<td class="fourfour" align="left" valign="top">
<font class="error">


<?php
//function calling DIR search
RecurseDir("secure/memfiles");

//function that searches
function RecurseDir($directory)
	{
	Global $filepath;
		$thisdir = array("name", "struct");
		$thisdir['name'] = $directory;
//open dir for reading?
		if ($dir = @opendir($directory))
			{
//variable for the DIR looping
				$i = 0;
				//as long as theres file to read stay in this dir
				while ($file = readdir($dir))
					{
// if the file is NOT . (return), or ..(double return)
						if (($file != ".")&&($file != ".."))
							{
//with this line it prints the entire path and file
								$filepath = $directory."/".$file;
								////echo "filepath:&nbsp;&nbsp;&nbsp;"; //echo $filepath;//echo "<BR>";



/*
forget all files expect that end with .php
*/
if(substr($filepath, -4, 4)==".php")
	{
/*
end extention search
*/



/*
pretext parsing, can we get ride of this?
*/

	if(substr($filepath, 0, 16)=="secure/memfiles/")
		{
			$filenames=$filepath;
			$filepath2=substr($filepath, 16, 128);
			//echo "<BR><BR><BR>filenames&nbsp;&nbsp;&nbsp;";//echo $filenames; //echo"<BR>";
			//echo "filename after pretext strip&nbsp;&nbsp;&nbsp;"; //echo $filepath2; //echo"<BR>";
			//echo"Pretextstrp good (secure/memfiles/)<BR><BR>";
/*
end pretext parsing- else is at the bottom
*/



/*
searching and getting the length of the username, we then parse it off
*/
			$countingtilldash1=0;
			$lookingfordashtoend1="";
			while ($lookingfordashtoend1 !== "/")
				{
					//echo "countingtilldash&nbsp;&nbsp;&nbsp;"; //echo $countingtilldash1; //echo"<BR>";
					$lookingfordashtoend1 = substr("$filepath2",$countingtilldash1,1);
					//echo"lookingfordashtoend&nbsp;&nbsp;&nbsp;";//echo $lookingfordashtoend1; //echo"<BR>";
					$countingtilldash1++;
				}
			if ($countingtilldash1>21)
				{
					break;
					return;
				}
			if ($lookingfordashtoend1 == "/")
				{
					$usernameis=substr("$filepath2",0,$countingtilldash1-1);
					//echo "filepath before username strip&nbsp;&nbsp;&nbsp;"; //echo $filepath2; //echo"<BR>";
					$filepath3=substr("$filepath2",$countingtilldash1,128);
					//echo "filepath after username strip&nbsp;&nbsp;&nbsp;"; //echo $filepath3; //echo"<BR>";
					//echo "usernameie&nbsp;&nbsp;&nbsp;"; //echo $usernameis; //echo"<BR>";
					//echo"we did good again<BR><BR><BR><BR>";
/*
end usrnm parsing
*/



/*
searching and getting the mod, then if it is original or SS keep it, else trash it.
*/
			$countingtilldash2=0;
			$lookingfordashtoend2="";
			while ($lookingfordashtoend2 !== "/")
				{
					//echo "countingtilldash2&nbsp;&nbsp;&nbsp;"; //echo $countingtilldash2; //echo"<BR>";
					$lookingfordashtoend2 = substr("$filepath3",$countingtilldash2,1);
					//echo"lookingfordashtoend2&nbsp;&nbsp;&nbsp;";//echo $lookingfordashtoend2; //echo"<BR>";
					$countingtilldash2++;
				}
			if ($countingtilldash2>21)
				{
					break;
					return;
				}
			if ($lookingfordashtoend2 == "/")
				{
					$modclassis=substr("$filepath3",0,$countingtilldash2-1);
					//echo "modclassis before username strip&nbsp;&nbsp;&nbsp;"; //echo $filepath3; //echo"<BR>";
					$filepath4=substr("$filepath3",$countingtilldash2,128);
					//echo "modclassis after username strip&nbsp;&nbsp;&nbsp;"; //echo $filepath4; //echo"<BR>";
					//echo "modclassis&nbsp;&nbsp;&nbsp;"; //echo $modclassis; //echo"<BR>";
					//echo"we did good dropping the mod<BR><BR><BR><BR>";
/*
end usrnm parsing
*/



/*
we search and get the object_class,
*/
					$countingtilldash3=0;
					$lookingfordashtoend3="";
					while ($lookingfordashtoend3 !== "/")
						{
							//echo "countingtilldash3&nbsp;&nbsp;&nbsp;"; //echo $countingtilldash3; //echo"<BR>";
							$lookingfordashtoend3 = substr("$filepath4",$countingtilldash3,1);
							//echo"lookingfordashtoend3&nbsp;&nbsp;&nbsp;";//echo $lookingfordashtoend3; //echo"<BR>";
							$countingtilldash3++;
						}
					if ($countingtilldash3>21)
						{
							break;
							return;
						}
					if ($lookingfordashtoend3 == "/")
						{
							$lgships=substr("$filepath4",0,$countingtilldash3-1);
							//echo "smshipis before username strip&nbsp;&nbsp;&nbsp;"; //echo $filepath4; //echo"<BR>";
							$filepath5=substr("$filepath4",$countingtilldash3,128);
							//echo "path is after username strip&nbsp;&nbsp;&nbsp;"; //echo $filepath5; //echo"<BR>";
							//echo "smshipis&nbsp;&nbsp;&nbsp;"; //echo $lgships; //echo"<BR>";
							//echo"we did good dropping the smshipis<BR><BR><BR><BR>";
/*
end of class parsing
*/






/*
Fighter search
now here will check to see if the ship is of a class we want on this page- here it is Fighter, change for each page
*/

							//echo"filepath so far: ";//echo $filepath5;//echo"<BR>";
							//echo"this is a Fighter";//echo $lgships;//echo"<BR>";
							$countingtilldash4=0;
							$lookingfordashtoend4="";
							while ($lookingfordashtoend4 !== "/")
								{
									//echo "countingtilldash4:&nbsp;&nbsp;&nbsp;"; //echo $countingtilldash4; //echo"<BR>";
									$lookingfordashtoend4 = substr("$filepath5",$countingtilldash4,1);
									//echo"lookingfordashtoend4:&nbsp;&nbsp;&nbsp;";//echo $lookingfordashtoend4; //echo"<BR>";
									$countingtilldash4++;
								}
							if ($countingtilldash4>21)
								{
									break;
									return;
								}
							if ($lookingfordashtoend4 == "/")
								{
									$smshipnameis=substr("$filepath5",0,$countingtilldash4-1);
									//echo "filepath before object name strip4&nbsp;&nbsp;&nbsp;"; //echo $filepath5; //echo"<BR>";
									$filepath6=substr("$filepath5",$countingtilldash4,128);
									//echo "filepath after username strip4&nbsp;&nbsp;&nbsp;"; //echo $filepath6; //echo"<BR>";
									//echo "object name4"; //echo $smshipnameis; //echo"<BR>";
									//echo"we did good again4<BR>";
									
									
									
									if($lgships=="Frigate")
										{
											include("$filenames");
										}
									//echo "<BR><BR><BR>";
									if($lgships=="Cruiser")
										{
											include("$filenames");
										}
									//echo "<BR><BR><BR>";
									if($lgships=="MissileCruiser")
										{
											include("$filenames");
										}
									//echo "<BR><BR><BR>";
								}





/*****
for the moding
*****/
						}
					elseif($countingtilldash3>17)
						{
							//echo "bad count looking for slash<BR><BR><BR><BR>";
							break;
							return;
						}
/**
end mod end
**/


						}
					elseif($countingtilldash2>17)
						{
							//echo "bad count looking for slash<BR><BR><BR><BR>";
							break;
							return;
						}
				}
			elseif($countingtilldash>14)
				{
					//echo"we bobo'd it";
				}
		}
	else
		{
		//echo "not a file";
		}
}
//if the path is a link follow it
								if (is_dir($filepath))
									{
										$thisdir['struct'][] = RecurseDir($filepath,$file);
									}
//if its not a path lin
								else
									{
										$thisdir['struct'][] = $file;
									}

								$i++;
							}
					}
				if ($i == 0)
					{
						// empty directory
						$thisdir['struct'] = -2;
					}
				}
		else
			{
				//directory could not be accessed
				$thisdir['struct'] = -1;
			}
		return $thisdir;
	}

?>

</font>
</td>
</tr>
<tr><td class="sixsix" align="center" valign="bottom">
<font>
<?PHP include('SCRIPTS/executetime2.php');?>
</font>
</td></tr>
</table>
<script src="SCRIPTS/contact-copyright.js"></script>
</div>
</body>
</html>
