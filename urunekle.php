<?php
error_reporting(0);
$connectMySQL=mysqli_connect('localhost','root','','facelektronik');
mysqli_set_charset($connectMySQL, "utf8");

$GetValues      =   array_keys($_POST);
$CountGetValues =   count($GetValues);

$QueryString = 'INSERT INTO '.$_POST["".$GetValues[0].""].' (';

for($i=1; $i<$CountGetValues; $i++) {
	$QueryString .= $GetValues[$i];
	if($i<$CountGetValues-1) $QueryString .= ',';
	else $QueryString .= ') VALUES (';
}
for($i=1; $i<$CountGetValues; $i++) {
	if(empty($_POST[$GetValues[$i]])) die('bosluk');
	$QueryString .= "'".$_POST[$GetValues[$i]]."'";
	if($i<$CountGetValues-1) $QueryString .= ',';
	else $QueryString .= ');';
}

$QueryRow = mysqli_query($connectMySQL, $QueryString);
if($QueryRow) echo mysqli_insert_id($connectMySQL);
else die('veritabani');
?>