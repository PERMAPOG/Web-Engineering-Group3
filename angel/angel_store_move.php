<?php
// Check if the move parameter is set
if (isset($_POST['move'])) {
    $move = $_POST['move'];

    $file = 'angel_game_state.txt';
    file_put_contents($file, $move . PHP_EOL, FILE_APPEND);
}
?>
