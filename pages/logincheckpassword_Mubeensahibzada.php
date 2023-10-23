<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Result</title>
</head>
<body>

<?php
if (isset($_GET["email"]) && isset($_GET["password"])) {
    $email = $_GET["email"];
    $password = $_GET["password"];

    // Check if the email and password match the hardcoded values
    if ($email == "test@hotmail.com" && $password == "abcd123$") {
        header("Location: loginsuccess_Mubeensahibzada.html");
        exit();
    } else {
        header("Location: logininvalid_Mubeensahibzada.html");
        exit();
    }
}
?>


<a href="login_Mubeensahibzada.html">Go Back</a>

</body>
</html>