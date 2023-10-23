<?php
    if(isset($_GET['filename'])) {
        $filename = $_GET['filename'];
        if(file_exists($filename)) {
            echo file_get_contents($filename);
        } else {
            echo "File does not exist.";
        }
    } else {
        echo "No filename received.";
    }
?>
