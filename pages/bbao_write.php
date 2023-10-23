<?php
$data = $_GET["data"];
$filename = "bbao_slide.txt";
$file = fopen($filename, "w");
fwrite($file, $data);
fclose($file);
?>
