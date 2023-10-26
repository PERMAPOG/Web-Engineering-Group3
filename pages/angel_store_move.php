<?php
// Check if the move parameter is set
if(isset($_POST['move'])) {
    // Get the move from the request
    $move = $_POST['move'];

    // Append the move to the game state file
    $file = 'game_state.txt';
    file_put_contents($file, $move.PHP_EOL, FILE_APPEND);
}
?>
