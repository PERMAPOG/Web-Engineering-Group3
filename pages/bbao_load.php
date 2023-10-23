<?php
// Define the path to the text file where the puzzle state is saved
$file_path = 'bbao_puzzle_state.txt';

if (file_exists($file_path)) {
    $saved_state = file_get_contents($file_path);
    echo $saved_state; // Send the saved state data back as a JSON response
} else {
    echo 'No saved state found.';
}
?>
