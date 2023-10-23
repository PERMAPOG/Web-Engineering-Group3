<?php
$filename = "checkers.txt";
if(file_exists($filename)){
    $file = fopen($filename, "r");
    while($data = fgets($file)){
        if($data != ""){
            echo $data;
        }
    }
    fclose($file);
}
else{
    echo "File not found";
}
?>
