<?php
require("login.php");
require("config.php");
require("ipaccess.php");

echo"$top $top2";
#gets the global upload DIR path

#sets variable $handle as for th DIR path
$handle = dir($the_path2);
#txt printing
print "<font class=\"words2\">Uploaded files:</font><br><br>";

RecurseDir("memfiles");
function RecurseDir($directory)
	{
		$thisdir = array("name", "struct");
		$thisdir['name'] = $directory;





//EC-
//list dir tree as non links
//echo $directory;echo"<br>";
//linebreak
echo "<br>";
		if ($dir = @opendir($directory))

			{
				$i = 0;
				while ($file = readdir($dir))
					{
						if (($file != ".")&&($file != ".."))
							{
								//dir & file contrcution
								$reallink = $directory."/".$file;
								//cuts off the 1sat 9 charachters so trhat we can display the path-path can be 128 characters long
								$printlink = substr("$reallink", 9, 128);


//we will check for a '.' three characters back and if its not there we'll add a '/' to the end and that should give us a link into a folder.
// will set checkingfordot to the firth from last character
$checkingfordot = substr("$reallink", -4,1);
//echo $checkingfordot;echo "<br>";
//comparing checkingfordot yo see if it is a dot ondeed and what to do if / if not it is
if ($checkingfordot !== ".")
	{
	//lists just name of the DIR
	//echo "   <a href=\" ".$reallink."/\" target=\"_new\" class=\"links\">".$printlink."</a>-<br>   ";
	}
else
	{
	//list full name & path as a link
	echo "<a href=\"" . $reallink .  "\"target=\"_new\" class=\"links\">" . $printlink . "</a>-<br>";
	}



								if (is_dir($reallink))
									{
										$thisdir['struct'][] = RecurseDir($reallink,$file);
									}
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



//echo $the_path2;
//include ("c:".$the_path2."Pheagey/Drone/Hatchet/Pheagey-hatchet.php");



echo"$bottom";
?>
