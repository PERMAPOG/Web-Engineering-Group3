<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userChoice = $_POST["userChoice"];
    $file = "RPSplayerchoices_Mubeensahibzada.txt";

    // Read the existing player choices from the file
    $playerChoices = json_decode(file_get_contents($file), true);

    // Store the current player's choice
    $playerChoices[] = $userChoice;
    file_put_contents($file, json_encode($playerChoices));

    // Check if both players have made their choices
    if (count($playerChoices) == 2) {
        // Determine the winner
        $cpuChoices = ["rock", "paper", "scissors"];
        $cpuChoice = $cpuChoices[array_rand($cpuChoices)];

        $player1Choice = $playerChoices[0];
        $player2Choice = $playerChoices[1];

        $outcomes = [
            "rock" => "scissors",
            "scissors" => "paper",
            "paper" => "rock"
        ];

        if ($player1Choice == $player2Choice) {
            $result = "It's a draw!";
        } elseif ($outcomes[$player1Choice] == $player2Choice) {
            $result = "Player 1 wins!";
        } else {
            $result = "Player 2 wins!";
        }

        echo json_encode([
            "userChoice" => $player1Choice,
            "cpuChoice" => $cpuChoice,
            "result" => $result
        ]);

        // Clear the choices file
        file_put_contents($file, "");
    }
}
?>
