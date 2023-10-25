// Define the URLs for game state updates and retrievals.
const updateUrl = 'game.php';
const retrieveUrl = 'game.php';

// Function to send a POST request to update the game state.
function sendGameState(player, position) {
  const data = new URLSearchParams();
  data.append('player', player);
  data.append('position', position);

  fetch(updateUrl, {
    method: 'POST',
    body: data,
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`Network response was not ok: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      // Handle the response data if needed.
      console.log('Game state updated:', data);
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

// Function to retrieve the game state via a GET request.
function retrieveGameState() {
  fetch(retrieveUrl)
    .then((response) => {
      if (!response.ok) {
        throw new Error(`Network response was not ok: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      // Handle the response data (game state) if needed.
      console.log('Game state retrieved:', data);
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

// Example: Sending an update request.
// sendGameState('player1', 75); // Example player and position.

// Example: Retrieving the game state.
// retrieveGameState();
