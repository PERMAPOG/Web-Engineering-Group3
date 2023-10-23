

<?php
$firstName = $_GET["firstName"];
$lastName= $_GET["lastName"];
$email = $_GET["email"];

    if (empty($firstName) || empty($lastName) || empty($email)) {
        echo "Error: All fields are required. Please fill in all the information.";
    } else {
        echo "Thank you for submitting the form!";
    }

?>
