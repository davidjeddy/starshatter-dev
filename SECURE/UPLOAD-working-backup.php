<?php
//**************************************************
//**************************************************
//Need to add an algoryths that will not allow anthing to be wrote if any file types are wrong
//if not image do print out wrong file types
//need to have an error checker for character other than alpha-numeric
//**************************************************
//**************************************************
//add's required files and header info
require("login.php");
require("config.php");
require("ipaccess.php");



//set variables that are used in this page
//file size
//$max_file_size 	= "2097512"; # =2Megs
$max_file_size 	= "4195024"; # =4Megs
//registerd file type- part of the allowed files that can be uploaded. these are the MIME types
$registered_file_types =  array(
					"application/x-gzip-compressed" 	=> ".tar.gz, .tgz",
					"application/x-zip-compressed" 		=> ".zip",
					"application/x-tar"					=> ".tar",
					"application/octet-stream"			=> ".exe, .fla (etc)"
					); # these are only a few examples, you can find many more!
//allowed file types to upload
$allowed_file_types = array("application/x-gzip-compressed","application/x-zip-compressed","application/x-tar");



$max_img_width	= "1025";
$max_img_height	= "800";
$registered_img1_types = array(
					"image/pjpeg"						=> ".jpg, .jpeg",
					"image/jpeg"						=> ".jpg, .jpeg",);
$allowed_img1_types = array("image/pjpeg","image/jpeg");
$registered_img2_types = array(
					"image/pjpeg"						=> ".jpg, .jpeg",
					"image/jpeg"						=> ".jpg, .jpeg",);
$allowed_img2_types = array("image/pjpeg","image/jpeg");


//vary top of page, sets up layout-menu-and top text junk.
echo"
$top
$top2
";



//form function, sets up the form 

function form($error=false,$username,$object_name,$object_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2)
	{
		//global sets up variables that will be used.
		global $PHP_SELF,$max_file_size;
		//error control
		if ($error) print $error . "<br><br>";
		//starts form here
		print "<font class=\"words1\"><form ENCTYPE=\"multipart/form-data\"  action=\"" . $PHP_SELF . "\" method=\"post\">";
		//loads the max file size into a hidden area so that it can be checked.
		print "<INPUT TYPE=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"" . $max_file_size . "\">";
		//dunno about this but its needed.
		print "<INPUT TYPE=\"hidden\" name=\"task\" value=\"upload\" class=\"input\">";
		print "<P>Upload:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT NAME=\"the_file\" TYPE=\"file\" SIZE=\"16\" class=\"input\"><br>";
		//lists the max file size by the byte converted to MB then round to a whole number.
		print "( NOTE: Max file size is " . round(($max_file_size / 1024),0) . " Kilobytes (" . round(($max_file_size / 1024000),0) . " Megs).<br>";
		//object name input
		print "Object Name:<input name=\"object_name\" type=\"text\" class=\"input\" maxlength=\"32\" ><br>";
		print "( The name that will be displayed to people<br>";
		//object class dropdown menu
		print "Object Type:&nbsp;&nbsp;&nbsp;<select name=\"object_type\" class=\"select\">";
		print "<option value=\"Drone\">Sm Ship - Drone</option>";
		print "<option value=\"Fighter\">Sm Ship - Fighter</option>";
		print "<option value=\"LCA\">Sm Ship - L.C.A.</option>";
		print "<option value=\"Freighter\">Sm Ship - Freighter</option>";
		print "<option value=\"Frigate\">Md Ship - Frigate</option>";
		print "<option value=\"MissileCruiser\">Md Ship - Missile Cruiser</option>";
		print "<option value=\"Cruiser\">Md Ship - Cruiser</option>";
		print "<option value=\"Destroyer\">Lg Ship - Destroyer</option>";
		print "<option value=\"Carrier\">Lg Ship - Carrier</option>";
		print "<option value=\"Station\">St - Station</option>";
		print "<option value=\"Planet\">St - Planet</option>";
		print "<option value=\"Building\">Surface - Building</option>";
		print "<option value=\"Factory\">Surface - Factory</option>";
		print "<option value=\"SAM\">Surface - S.A.M.</option>";
		print "<option value=\"ShipDEF\">Def -Ship File</option>";
		print "<option value=\"MissionDEF\">Def - Mission file</option>";
		print "<option value=\"CampaginDEF\">Def - Campagin file</option>";
		print "<option value=\"Other\">Misc - Other</option>";
		print "</select><br>";
		//styling works for a text area but not a listbox??...
		//print "<textarea name=\"asd\" cols=\"3\" rows=\"3\" wrap=\"virtual\" class=\"textarea\" ></textarea><br>";
		//version number input
		print "Version (x.xx):<input name=\"version_number\" type=\"text\" class=\"input\" size=\"4\" maxlength=\"4\" value=\"\"><br>";
		//mod class drop down
		print "Mod:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name=\"mod_class\"   class=\"select\">";
		print "<option value=\"original\">Original</option>";
		print "<option value=\"b5\">Babylon 5</option>";
		print "<option value=\"saab\">Space: Above & Beyond</option>";
		print "<option value=\"st\">Star Trek</option>";
		print "<option value=\"sw\">Star Wars</option>";
		print "<option value=\"bg\">Battlestar Galactica</option>";
		print "<option value=\"fs\">Farscape</option>";
		print "<option value=\"hw\">Homeworld / Cataclysm </option>";
		print "<option value=\"other\">Other</option>";
		print "</select><br>";
		//mod class drop down
		print "LODs:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name=\"lods\"  class=\"select\">";
		print "<option value=\"\"></option>";
		print "<option value=\"no\">no</option>";
		print "<option value=\"yes\">yes-2</option>";
		print "<option value=\"yes\">yes-3</option>";
		print "<option value=\"yes\">yes-4</option>";
		print "<option value=\"yes\">yes 5</option>";
		print "<option value=\"yes\">6 or more</option>";
		print "<option value=\"na\">NA</option>";
		print "</select><br>";
		//textured drop down
		print "Textured:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name=\"textures\"  class=\"select\">";
		print "<option value=\"\"></option>";
		print "<option value=\"na\">Not Applicatable</option>";
		print "<option value=\"no\">no</option>";
		print "<option value=\"yes\">yes</option>";
		print "</select><br>";
		print "(For ships, buildings, weapons, etc.)<br>";
		//DEF drop down
		print "DEF file:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name=\"def\"  class=\"select\">";
		print "<option value=\"\"></option>";
		print "<option value=\"na\">Not Applicatable</option>";
		print "<option value=\"no\">no</option>";
		print "<option value=\"yes\">yes</option>";
		print "</select><br>";
		print "(For ships, buildings, weapons, etc.)<br>";
		//Debris drop down
		print "Debris:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name=\"debris\"  class=\"select\">";
		print "<option value=\"\"></option>";
		print "<option value=\"na\">Not Applicatable</option>";
		print "<option value=\"no\">no</option>";
		print "<option value=\"yes\">yes</option>";
		print "</select><br>";
		print "(For ships, buildings, weapons, etc.)<br>";
		//$the_img1 file
		print "<P>Img #1:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT NAME=\"the_img1\" TYPE=\"file\" SIZE=\"16\" class=\"input\"><br>";
//$the_img2 file
		print "<P>Img #2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT NAME=\"the_img2\" TYPE=\"file\" SIZE=\"16\" class=\"input\"><br>";
		print "(Images must be *.jpg format and no larger than 1024*768 resolution.)<br>";
		print "<input type=\"submit\" Value=\"Upload\" class=\"submit\">";
		print "</form></font>";
		
		
	}
// END form

function validate_form_info($object_name,$object_type,$version_number,$mod_class,$lods,$textures,$def,$debris)
	{
		$start_form_error = "<font class=\"form_error\">form_error: <UL>";
		if ($object_name == "")
			{
				$form_error .= "<li>Please NAME your upload.</li>";
			}
		if ($object_type == "")
			{
				$form_error .= "<li>Please choose an object TYPE. </li>";
			}
			
		if ($version_number == "")
			{
				$form_error .= "<li>Please enter a correct VERSION number. </li>";
			}
		if ($mod_class == "")
			{
				$form_error .= "<li>Please enter a correct MOD type. </li>";
			}
		if ($lods == "")
			{
				$form_error .= "<li>Please enter a correct LOD number. </li>";
			}
		if ($textures == "")
			{
				$form_error .= "<li>Please pick a TEXTURE option. </li>";
			}
		if ($def == "")
			{
				$form_error .= "<li>Please pick a DEF option. </li>";
			}
		if ($debris == "")
			{
				$form_error .= "<li>Please pick a DEBRIS option. </li>";
			}
		if ($form_error)
			{
				$end_form_error="</UL></FONT>";
				$final_form_error=$start_form_error . $form_error . $end_form_error;
				$error = $start_form_error . $form_error . $end_form_error;
				return $final_form_error;
				return $error;
			}
			//returns to run the rest if all is false here
			else
			{
				return false;
			}
	}

#validates the uploaded file
function validate_file_upload($the_file)
	{
		global $max_file_size,$allowed_file_types,$the_file_type,$registered_file_types;
		$start_file_error = "<font class=\"file_error\">file_error: <ul>";
		//check the the_file feild-if true print if false goto next
		if ($the_file == "none")
			{
				$file_error .= "<li>You did not specify a file to upload.</li>";
			}
		//see if this file type is allowed
		elseif(!in_array($the_file_type,$allowed_file_types))
			{
				$file_error .= "<li>The file that you uploaded was of a type that is not allowed, you are only allowed to upload files of the type:</li>";
				while ($type = current($allowed_file_types))
					{
						$file_error .= "<li>" . $registered_file_types[$type] . " (" . $type . ")</li>";
						next($allowed_file_types);
					}
			}
		//how can we ad a file size checker if we have not uploaded it yet? What about checking the_file and not the_file_name??
		if ($file_error)
			{
				$end_file_error="</UL></FONT>";
				$final_file_error=$start_file_error . $file_error . $end_file_error;
				$error = $start_file_error . $file_error . $end_file_error;
				return $final_file_error;
				return $error;
			}
			//returns to run the rest if all is false here
			else
			{
				return false;
			}
			
	}
# END validate_upload

//image validation function
function validate_img_upload($the_img1,$the_img2)
	{
		//calls global variables
		global $max_img_width, $max_img_height,$allowed_img1_types,$registered_img1_types,$allowed_img2_types,$registered_img2_types,$the_img1_type,$the_img2_type;
//echos notice if there was no image 1 uploaded
		if ($the_img1 == "none")
			{
				$no_img1_error = "<font class=\"words2\">You did not upload a 1st img. (Need only if your uploading a ship/fighter/station/etc.)</font><BR>";
				$the_img1=null;
				
			}
		if (!$the_img1 == "none")
			{
//img1 type check
				if (!in_array($the_img1_type,$allowed_img1_types))
					{
						$start_img1_error="<font class=\"img_error\">Image #1 is of a type that is not allowed, you are only allowed to upload files of the type:<UL>";
						while ($type = current($allowed_img1_types))
							{
								$img1_error .= "<li>" . $registered_img1_types[$type] . " (" . $type . ")</li>";
								next($allowed_img1_types);
							}
//
					}
//img1 size check
				if (ereg("image",$the_img1_type) && (in_array($the_img_type,$allowed_img1_types)))
					{
						$size = GetImageSize($the_img1);
						list($foo,$width,$bar,$height) = explode("\"",$size[3]);
						if ($width > $max_img_width)
							{
								$img1_error .= "<li>Your Image1 should be no wider than " . $max_img_width . " Pixels</li>";
							}
						if ($height > $max_img1_height)
							{
								$img1_error .= "<li>Your Image1 should be no higher than " . $max_img_height . " Pixels</li>";
							}
					}
				$end_img1_error .= "</li></ul></font><BR>";
				$img_error="img error";
			}




//echos notice if there was no image 2 uploaded
		if ($the_img2 == "none")
			{
				$no_img2_error = "<font class=\"words2\">You did not upload a 2st img. (Need only if your uploading a ship/fighter/station/etc.)</font><BR>";
				$the_img2=null;
				
			}
		if (!$the_img2 == "none")
			{
//img2 type check
				if (!in_array($the_img2_type,$allowed_img2_types))
					{
						$start_img2_error="<font class=\"img_error\">Image #2 is of a type that is not allowed, you are only allowed to upload files of the type:<UL>";
						while ($type = current($allowed_img2_types))
							{
								$img2_error .= "<li>" . $registered_img2_types[$type] . " (" . $type . ")</li>";
								next($allowed_img2_types);
							}
//
					}
//img2 size check
				if (ereg("image",$the_img2_type) && (in_array($the_img_type,$allowed_img2_types)))
					{
						$size = GetImageSize($the_img2);
						list($foo,$width,$bar,$height) = explode("\"",$size[3]);
						if ($width > $max_img_width)
							{
								$img2_error .= "<li>Your Image2 should be no wider than " . $max_img_width . " Pixels</li>";
							}
						if ($height > $max_img2_height)
							{
								$img2_error .= "<li>Your Image2 should be no higher than " . $max_img_height . " Pixels</li>";
							}
					}
				$end_img2_error .= "</li></ul></font><BR>";
				$img_error="img error";
			}
		if ($img_error)
			{
				//$end_img1_error="</UL></FONT>";
				$final_img_error=$no_img1_error . $start_img1_error . $img1_error . $end_img1_error.$no_img2_error . $start_img2_error . $img2_error . $end_img2_error;
				$error = $final_img_error;
				return $final_img_error;
				return $error;
			}
		//returns to run the rest if all is false here
		else
			{
				return false;
			}
	}


#upload function
function upload($the_file,$username,$object_name,$object_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2,$the_path3)
	{
		global $the_path2,$the_file_name,$the_img1_name,$the_img2_name,$errorchecker1,$errorchecker2;
		//parse out spaces in the object_name, and file_name
		$ob_nm_spaces = $object_name;
		$object_name = (str_replace(" ","",$ob_nm_spaces));
		$the_fl_nm_wspaces = $the_file_name;
		$the_file_name = (str_replace(" ","",$the_fl_nm_wspaces));
//setup the variables that will be used here
//makes and formate time variables for the file that will be wrote
		$timedate1 = date("g:i a, F j, Y, ");
		$timedate2 = date("g:i a,");
		$timedate3 = date("F j, Y, ");
		$the_path3=$the_path2 . $username . "/" . $mod_class . "/" . $object_type . "/" . $object_name . "/";
		$the_path4="SECURE/MEMFILES/";
		$write_the_file_name_path="SECURE/MEMFILES/".$username."/".$mod_class."/".$object_type."/".$object_name."/".$the_file_name;
		$writephpfile=$the_path2 . $username . "/" . $mod_class . "/" . $object_type . "/" . $object_name . "/" . $username . "-" . $object_name . ".php";
		$imgpath=$the_path4 . $username . "/" . $mod_class . "/"  . $object_type . "/" . $object_name."/";
		$imgminipath=$the_path4 . $username . "/" . $mod_class . "/" . $object_type . "/" . $object_name . "/tmb_";
		$errorchecker1=0;
		$errorchecker2=1;
//fiel validations and error reporting
		$final_form_error = validate_form_info($object_name,$object_type,$version_number,$mod_class,$lods,$textures,$def,$debris);
		$final_file_error = validate_file_upload($the_file);
		$final_img_error = validate_img_upload($the_img1,$the_img2);
		if (!$final_form_error=="")
			{
				echo $final_form_error;
				$errorchecker1=$errorchecker1+2;
			}
		if (!$final_file_error=="")
			{
				echo $final_file_error;
				$errorchecker1=$errorchecker1+2;
			}
//dont need the check for an img error 'cause we don't NEED images
		if (!$final_img_error=="")
			{
				echo $final_img_error;
//$errorchecker1=$errorchecker1+2;
			}
//stat echo'ing
//should only go here if EC1=2 (one error will cause this)
		if ($errorchecker1>$errorchecker2)
			{
//echo"<font class=\"words\">&nbsp;&nbsp;&nbsp;If you are reading this then there has been an error while uploading. Please tell <a href=\"mailto:pheageygrean@hotmail.com\" target=\"_new\">me (Pheagey)</a> about it. Please include an details possible.</font>";
				form($error=false,$username,$object_name,$object_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2);
				return;
			}
//should only go here if EC1=0 (no errors will cause this)
		if ($errorchecker1<$errorchecker2)
			{
//			echo "good upload-should read 0<1 == ";echo $errorchecker1." < ".$errorchecker2; 
//				print "Good upload thanx";
//if path3 does not exist this makes it.
				if(!file_exists($the_path3))
					{
						$a="";
						foreach(explode("/",$the_path3) AS $k)
							{
								$a.=$k."/";
								if(!file_exists($a)) mkdir($a, 0777);
							}
					}
//here we upload the_file using the_file_name\
				if($the_file!="none")
					{
						//change the file name to the object name??
						if (!copy($the_file,$the_path3 . $the_file_name))
							{
								echo "file copy";
							}
					}
//check to see if we have an img1
				if($the_img1!="none")
					{
//renames the_img1_name to whatever objhect_name is and add's a -1
						$the_img1_name=$object_name."-1.jpg";
//copy's the_img1 using the_img1_name
						if (!copy($the_img1,$the_path3.$the_img1_name))
							{
								echo"img1 copy";
							}
						if(file_exists($the_path3.$the_img1_name))
							{
//then we make a thumbnail of the img and save it with the prefix 'tmb_'
								exec ("c:/ImageMagick-win2k/convert.exe -size 190x145 c:".$the_path3.$the_img1_name." -geometry 183x141 c:".$the_path3."tmb_".$the_img1_name."");
							}
					}
//check to see if we have an img2
				if($the_img2!="none")
					{
//renames the_img1_name to whatever objhect_name is and add's a -1
						$the_img2_name=$object_name."-2.jpg";
//copy's the_img1 using the_img1_name
						if (!copy($the_img2,$the_path3.$the_img2_name))
							{
								echo"img2 copy";
							}
						if(file_exists($the_path3.$the_img2_name))
							{
//then we make a thumbnail of the img and save it with the prefix 'tmb_'
								exec ("c:/ImageMagick-win2k/convert.exe -size 190x145 c:".$the_path3.$the_img2_name." -geometry 183x141 c:".$the_path3."tmb_".$the_img2_name."");
							}
					}
//open file to write, if dont exist makes it, then opens it
				$f=fopen($writephpfile, "wb+");
//writes info to file
				fwrite($f,"<table width=\"100%\" border=\"0\" class=\"sotw\" cellpadding=\"3\" cellspacing=\"3\">
					<tr><td class=\"fourfour\" align=\"left\" valign=\"top\">
<a name=\"$username\"></a><font class=\"newtitle\">$username:</font><br>
						<table width=\"100%\" border=\"0\" class=\"sotw\" cellpadding=\"3\" cellspacing=\"3\">
							<tr>
									<td align=\"left\" valign=\"middle\" width=\"50%\"><font class=\"words2\">$object_type, $ob_nm_spaces<BR>$timedate1</font>
								</td>
								<td align=\"right\" valign=\"middle\" width=\"50%\"><a href=\"$write_the_file_name_path\" target=\"_self\" class=\"shipdesigners\" >
Download $username 's $ob_nm_spaces</a>
								</td>
						</tr>
						<tr>");
				fclose($f);
				if(!$the_img1_name=="")
					{
						
						$f=fopen($writephpfile, "ab-");
						fwrite($f,"
<td align=\"center\" valign=\"middle\">
<a href=\"$imgpath$the_img1_name\" target=\"new\">
<img src=\"$imgminipath$the_img1_name\" border=\"0\">
</a>
						</td>");
						fclose($f);
					}
				else
					{
						$f=fopen($writephpfile, "ab-");
						fwrite($f,"<td align=\"center\" valign=\"middle\"><font class=\"words\">&nbsp;&nbsp;&nbsp;</font></td>");
						fclose($f);
					}
//looks to see if an img2/tmb_img2 was uploaded, if it was this shows the tmb and links it to the img- 
				if(!$the_img2_name=="")
					{
						$f=fopen($writephpfile, "ab-");
						fwrite($f,"
<td align=\"center\" valign=\"middle\">
<a href=\"$imgpath$the_img2_name\" target=\"new\">
<img src=\"$imgminipath$the_img2_name\" border=\"0\">
</a>
						</td>");
						fclose($f);
					}
				else
					{
						$f=fopen($writephpfile, "ab-");
						fwrite($f,"
						<td align=\"center\" valign=\"middle\"><font class=\"words\">&nbsp;&nbsp;&nbsp;</font></td>");
						fclose($f);
					}
//open file to write, if dont exist makes it then opens it
				$f=fopen($writephpfile, "ab-");
//writes info to file
				fwrite($f,"
					</tr>
					<tr>
						<td align=\"center\" valign=\"middle\" colspan=\"2\">
							<table border=\"0\" class=\"sotw\" cellpadding=\"2\" cellspacing=\"2\" width=\"100%\" align=\"center\">
								<tr>
									<td align=\"left\"><font class=\"words3\">Object Name:</font></td><td align=\"left\"><font class=\"words1\">$ob_nm_spaces</font>
									</td>
									<td align=\"left\"><font class=\"words3\">Object Type:</font></td><td align=\"left\"><font class=\"words1\">$object_type</font>
									</td>
									<td align=\"left\"><font class=\"words3\">Upload Date:</font></td><td align=\"left\"><font class=\"words1\">$timedate3</font>
									</td>
								</tr>
								<tr>
									<td colspan=\"6\">&nbsp;&nbsp;&nbsp;</td>
								</tr>
								<tr>
									<td align=\"left\"><font class=\"words3\">Textured:</font></td><td align=\"left\"><font class=\"words1\">$textures</font>
									</td>
									<td align=\"left\"><font class=\"words3\">Def file:</font></td><td align=\"left\"><font class=\"words1\">$def</font>
									</td>
									<td align=\"left\"><font class=\"words3\">LOD:</font></td><td align=\"left\"><font class=\"words1\">$lods</font>
									</td>
								</tr>
								<tr>
									<td colspan=\"6\">&nbsp;&nbsp;&nbsp;</td>
								</tr>
								<tr>
									<td align=\"left\"><font class=\"words3\">Debris:</font></td><td align=\"left\"><font class=\"words1\">$debris</font>
									</td>
									<td align=\"left\"><font class=\"words3\">Version</font></td><td align=\"left\"><font class=\"words1\">$version_number</font>
									</td>
									<td align=\"left\"><font class=\"words3\">Editers 
									Quality Rating:</font></td><td align=\"left\"><font class=\"words1\"></font>
									</td>
								</tr>
								<tr>
									<td align=\"left\" colspan=\"2\"><font class=\"words3\">Editers Notes:</font></td><td align=\"left\" colspan=\"4\"><font class=\"words1\">&nbsp;&nbsp;&nbsp;</font>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>");
				fclose($f);
//variables echoed here
/*
echo "the_path2= ";echo $the_path2; echo "<BR>";
echo "the_path3= ";echo $the_path3; echo "<BR>";
echo "the_path4= ";echo $the_path4; echo "<BR>";
echo "Username= "; echo $username; echo "<BR>";
echo "Object_Type= ";echo $object_type; echo "<BR>";
echo "Object_Name= ";echo $object_name; echo"<BR>";
echo "the_file_name= ";echo $the_file_name;echo "<BR>";
echo "file_name= ";echo $the_file;echo "<BR>";
echo "img1_name= ";echo $the_img1;echo "<BR>";
echo "img2_name= ";echo $the_img2;echo "<BR>";
echo "the_img1_name= ";echo $the_img1_name;echo "<BR>";
echo "the_img2_name= ";echo $the_img2_name;echo "<BR>";
echo "img1minipath"; echo $img1minipath; echo"<BR>";
echo "img2minipath"; echo $img2minipath; echo"<BR>";
echo "final_img_error"; echo $final_img_error; echo"<BR>";
echo "errorchecker1(over 0 is bad)= "; echo $errorchecker1; echo "<BR>";
echo "errorchecker2(should stay at 1)= "; echo $errorchecker2; echo "<BR>";
*/
//writes the end of the page (new form and link to files
				//echo"<font class=\"words1\">&nbsp;&nbsp;&nbsp;Thanks for the upload, if you are reading this then everything went as expect and your files should be avalaible for public downloading. thanks again</font>";
				form($error=false,$username,$object_name,$object_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2);
				return;
			}
	}


# END upload



############ Start page
switch($task)
	{
		case 'upload':
		upload($the_file,$username,$object_name,$object_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2,$the_path3);
		break;
		default:
		form($error=false,$username,$object_name,$object_type,$version_number,$mod_class,$lods,$textures,$def,$debris,$the_img1,$the_img2);
	}
echo"$bottom";
?>
