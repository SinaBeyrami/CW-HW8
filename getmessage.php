<?php

$fname = $_GET["firstname"];
$lname = $_GET["lastname"];
$email = $_GET["email"];
$message = $_GET["message"];

$i = 1;
$filename = "/var/www/html/$i.txt";
while (file_exists($filename)){
	$i++;
	$filename = "/var/www/html/$i.txt";
}

$newfile = fopen("$i.txt","w") or die ("unable to open file!");
$txt = $fname." ".$lname."\n".$email."\n".$message;
fwrite($newfile , $txt);
fclose($newfile);

?>
