<?php

if (file_exists($COUNT_FILE)) {
	// En: Open, read, increment, save and close file.
	// Fr: Ouvre, lit, incrémente, sauve et ferme le fichier.
	$fp = fopen("$COUNT_FILE", "r+");
	flock($fp, 1);
	$count = fgets($fp, 4096);
	$count += 1; 
	fseek($fp,0);
	fputs($fp, $count);
	flock($fp, 3);
	fclose($fp);
} else {
	// En: Display a error message if file does not exist.
	// Fr: Affiche un message d'erreur si le fichier n'existe pas.
	echo "Can't find file, check '\$file' var...<BR>";
	exit;
}

// En: Display count value
// Fr: Affiche le nombre de visiteur.

chop($count);
$nb_digits = max(strlen($count), $NB_DIGITS);
$count = substr("0000000000".$count, -$nb_digits);

$digits = preg_split("//", $count);

for($i = 0; $i <= $nb_digits; $i++) {
	if ($digits[$i] != "") {
		$html_result .=  "<IMG SRC=\"$IMG_DIR_URL/$digits[$i].png\" height=\"24\"  width=\"12\" alt=\"IndexCounter\">";
	}
}
?>

