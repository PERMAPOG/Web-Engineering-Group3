import Ball from "./Ball.js";
import Paddle from "./Paddle.js";

// Game state variables
let ball, playerPaddle, computerPaddle, playerScoreElem, computerScoreElem;
let gameRunning = false;
let vsComputerMode = true;

const playerVsPlayerButton = document.getElementById("player-vs-player");
const playerVsComputerButton = document.getElementById("player-vs-computer");

playerVsPlayerButton.addEventListener("click", () => {
  vsComputerMode = false;
  startGame();
});

playerVsComputerButton.addEventListener("click", () => {
  vsComputerMode = true;
  startGame();
});

function startGame() {
  if (gameRunning) return;

  // Remove the game mode menu.
  const gameModeMenu = document.querySelector(".game-mode");
  gameModeMenu.style.display = "none";

  // Initialize game elements and logic
  ball = new Ball(document.getElementById("ball"));
  playerPaddle = new Paddle(document.getElementById("player-paddle"));
  computerPaddle = new Paddle(document.getElementById("computer-paddle"));
  playerScoreElem = document.getElementById("player-score");
  computerScoreElem = document.getElementById("computer-score");

  // Initialize the game loop
  let lastTime;

  function update(time) {
    if (lastTime) {
      const delta = time - lastTime;
      ball.update(delta, [playerPaddle.rect(), computerPaddle.rect()]);
      computerPaddle.update(delta, ball.y);
      const hue = parseFloat(
        getComputedStyle(document.documentElement).getPropertyValue("--hue")
      );
      document.documentElement.style.setProperty("--hue", hue + delta * 0.01);

      if (isLose()) handleLose();
    }

    lastTime = time;
    window.requestAnimationFrame(update);
  }

  // Add event listeners for player inputs
  document.addEventListener("mousemove", (event) => {
    playerPaddle.position = (event.clientY / window.innerHeight) * 100;
  });

  gameRunning = true;

  // Start the game loop.
  window.requestAnimationFrame(update);
}

function isLose() {
  const rect = ball.rect();
  return rect.right >= window.innerWidth || rect.left <= 0;
}

function handleLose() {
  const rect = ball.rect();
  if (rect.right >= window.innerWidth) {
    playerScoreElem.textContent = parseInt(playerScoreElem.textContent) + 1;
  } else {
    computerScoreElem.textContent = parseInt(computerScoreElem.textContent) + 1;
  }
  ball.reset();
  computerPaddle.reset();
  gameRunning = false;
}

// Initially, display the game mode menu
const gameModeMenu = document.querySelector(".game-mode");
gameModeMenu.style.display = "block";
