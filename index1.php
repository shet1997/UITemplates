<?php 

session_start();
	
$times = time();

echo $times;

$encrypted = md5($times);

$encrypted = sha1($times);

echo $encrypted;

header("location: index2.php");

?>