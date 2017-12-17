<script language="php">

/* *****************************************************************
	Randomly Generates Codes For Registration

	DO NOT EDIT!!!!
***************************************************************** */


/*  CONFIGURATION  */


$arrFiles = array ("regcodes", "regcodes1");


// Sign used to separate the quotes, according to your database-files.
$sep = "%\r";   // "%" + "new line"
/* 	ATTENTION: some programs/systems use "\n" instead of "\r" for
	linefeed. So if the script does not work, first try changing
	"%\r" to "%\n".   */


/*  The CODE, do only change, if you know what you do  */

srand ((double) microtime() * 10000000); 
$randKey = getRKey($arrFiles);
$theFile = $arrFiles[$randKey];

if (file_exists($theFile)) {
	$fcontent = join ('', file ($theFile));
	$zitate = explode ($sep, $fcontent);

	$randKey = getRKey($zitate);
	$regCode = makeBR($zitate[$randKey]);
}
else {
	$regCode = "File '$theFile' not found";
}
echo "";
echo "";

function getRKey($arr){
	$c = count($arr) - 1;
	return rand(0, $c);
}

function makeBR($text){
	$text = trim($text);
	$text = str_replace("\n", "<br>", $text);
	return $text;
}

</script>