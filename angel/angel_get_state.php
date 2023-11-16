<?php
$file = 'angel_game_state.txt';
$game_state = file($file, FILE_IGNORE_NEW_LINES);
echo json_encode($game_state);
?>
