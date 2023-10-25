<?php
// Define the file path for storing the game state data.
$gameStateFile = 'game_state_json.json';

// Function to read the game state from the JSON file.
function readGameState() {
    global $gameStateFile;
    if (file_exists($gameStateFile)) {
        $json = file_get_contents($gameStateFile);
        return json_decode($json, true);
    } else {
        // Initialize the game state.
        $gameState = array(
            'player1' => array('position' => 50),
            'player2' => array('position' => 50),
            'ball' => array('x' => 50, 'y' => 50),
            'score' => array('player1' => 0, 'player2' => 0)
        );
        return $gameState;
    }
}

// Function to write the game state to the JSON file.
function writeGameState($gameState) {
    global $gameStateFile;
    $json = json_encode($gameState);
    file_put_contents($gameStateFile, $json);
}

// Handle game state updates from players.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gameState = readGameState();
    
    // Update game state based on POST data.
    if (isset($_POST['player']) && isset($_POST['position'])) {
        $player = $_POST['player'];
        $position = intval($_POST['position']);
        $gameState[$player]['position'] = $position;
    }
    
    // Update ball position and scoring logic here if needed.
    
    // Write the updated game state back to the JSON file.
    writeGameState($gameState);
}

// Handle requests for game state from players.
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $gameState = readGameState();
    echo json_encode($gameState);
}
?>
