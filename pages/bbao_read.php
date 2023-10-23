<?php
$filename = $_GET["filename"];
$file = fopen($filename, "r");
$message = fgets($file);
fclose($file);

echo $message;
?>