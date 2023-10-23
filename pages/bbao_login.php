<?php
$validEmail = "test@hotmail.com";
$validPassword = "abcd123$";

$userEmail = $_POST["email"];
$userPassword = $_POST["password"];

if ($userEmail === $validEmail && $userPassword === $validPassword) {
    header("Location: success.html");
    exit();
} else {
    header("Location: invalidaccess.html");
    exit();
}
?>
