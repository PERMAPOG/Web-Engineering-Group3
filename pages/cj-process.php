<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Result</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = trim($_GET["email"]);
    $password = trim($_GET["password"]); // Added password field

    // Hardcoded email and password for validation
    $validEmail = "test@hotmail.com";
    $validPassword = "abcd123$";

    if (empty($email) || empty($password)) { // Added password to the check
        echo "<h2>Error: All fields are required!</h2>";
    } else {
        if ($email == $validEmail && $password == $validPassword) {
            header("Location: cj-success.html"); // Redirect to success page
            exit();
        } else {
            header("Location: cj-invalidaccess.html"); // Redirect to invalid access page
            exit();
        }
    }
}
?>

<a href="form.html">Go Back</a>

</body>
</html>
