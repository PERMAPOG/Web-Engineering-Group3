const gameContainer = document.querySelector(".container");
const userResult = document.querySelector(".user_result img");
const cpuResult = document.querySelector(".cpu_result img");
const result = document.querySelector(".result");
const optionImages = document.querySelectorAll(".option_image");

optionImages.forEach((image) => {
    image.addEventListener("click", () => {
        const userChoice = image.getAttribute("data-choice");

        // Send the user's choice to the server using Ajax
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "RPSprocess_Mubeensahibzada.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                updateUI(response);
            }
        };
        xhr.send("userChoice=" + userChoice);
    });
});

function updateUI(response) {
    userResult.src = `images/${response.userChoice}.png`;
    cpuResult.src = `images/${response.cpuChoice}.png`;
    result.textContent = response.result;
}