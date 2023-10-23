<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['data'])) {
    $data = $_GET['data'];
    
    // Save the puzzle state to a text file
    $file = fopen('bbao_puzzle_state.txt', 'w');
    fwrite($file, $data);
    fclose($file);
    
    echo "Puzzle state saved successfully.";
}
?>
