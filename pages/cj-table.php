<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Result</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        if ($number > 0) {
            echo "<h2>Multiplication Table for $number</h2>";
            echo "<pre>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $i * $number;
                echo "$i * $number = $result<br>";
            }
            echo "</pre>";
        } else {
            echo "Please enter a positive number.";
        }
    }
    ?>
    <p>
        <a href="cj-multiplication.html">Go Back</a>
    </p>
</body>

</html>
