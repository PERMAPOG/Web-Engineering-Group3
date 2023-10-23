<?php
    if(isset($_GET['data'])) {
        $data = $_GET['data'];
        file_put_contents('cj-game.txt', $data);
        echo "Game status updated.";
    } else {
        echo "No data received.";
    }
?>
