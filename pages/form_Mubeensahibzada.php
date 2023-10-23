<!DOCTYPE html>
<html>
<head>
    <title>Form Processing</title>
</head>
<body>
    <h2>Form Processing</h2>

    <?php
    if (isset($_GET['first_name']) && isset($_GET['last_name']) && isset($_GET['email'])) {
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
        $email = $_GET['email'];

        // Check if any of the fields are empty
        if (empty($first_name) || empty($last_name) || empty($email)) {
            echo "<p style='color: red;'>All fields are required. Please fill out the entire form.</p>";
        } else {
            echo "<p>Thank you for submitting the form!</p>";
            echo "<p>First Name: $first_name</p>";
            echo "<p>Last Name: $last_name</p>";
            echo "<p>Email: $email</p>";
        }
    } else {
        echo "<p style='color: red;'>All fields are required. Please fill out the entire form.</p>";
    }
    ?>

    <p><a href="form_MubeenSahibzada.html">Go back</a></p>
</body>
</html>