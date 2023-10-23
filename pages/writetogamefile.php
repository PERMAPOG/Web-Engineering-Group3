<?php
if(isset($_GET["data"])){
    $data = $_GET["data"];
    $filename = "checkers.txt";
    $file = fopen($filename, "w");
    fwrite($file, $data);
    fclose($file);
    echo "Success";
}
else{
    echo "No data provided";
}

?>
