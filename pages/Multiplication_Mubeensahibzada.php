<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Multiplication Table</h2>

    <?php
    if (isset($_GET['number'])) {
        $number = intval($_GET['number']);

        if ($number > 0) {
            echo "<h3>Multiplication Table for $number</h3>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $number * $i;
                echo "<li>$i * $number = $result</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Please enter a positive number.</p>";
        }
    } else {
        echo "<p>Please enter a number above.</p>";
    }
    ?>

    <p><a href="multiplication_Mubeensahibzada.html">Go back</a></p>
</body>
</html>