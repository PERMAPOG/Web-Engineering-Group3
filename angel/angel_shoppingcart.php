<!-- angel_shoppingcart.php -->

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../angel/angel.css" />


    <title>Selected Items</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h1>Selected Items</h1>

    <?php
    if (isset($_POST['selected_items'])) {
        $selected_items = $_POST['selected_items'];
        $items = array(
            "coffee1" => array("name" => "Coffee with Milk", "price" => 5.00, "quantity" => isset($_POST['coffee1']) ? $_POST['coffee1'] : 0),
            "coffee2" => array("name" => "Capuccio", "price" => 4.50, "quantity" => isset($_POST['coffee2']) ? $_POST['coffee2'] : 0),
            "coffee3" => array("name" => "Arabic", "price" => 6.00, "quantity" => isset($_POST['coffee3']) ? $_POST['coffee3'] : 0),
            "coffee4" => array("name" => "American", "price" => 3.50, "quantity" => isset($_POST['coffee4']) ? $_POST['coffee4'] : 0)
        );

        $total = 0;
        $taxRate = 0.1; // Assuming 10% tax rate
        ?>

        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php
            foreach ($selected_items as $selected_item) {
                $item = $items[$selected_item];
                $itemName = $item['name'];
                $itemPrice = $item['price'];
                $itemQuantity = $item['quantity'];
                $subtotal = $itemPrice * $itemQuantity;
                $total += $subtotal;
                ?>

                <tr>
                    <td><?php echo $itemName; ?></td>
                    <td>$<?php echo number_format($itemPrice, 2); ?></td>
                    <td><?php echo $itemQuantity; ?></td>
                    <td>$<?php echo number_format($subtotal, 2); ?></td>
                </tr>

            <?php
            }
            $tax = $total * $taxRate;
            $totalWithTax = $total + $tax;
            ?>

            <tr>
                <td colspan="3">Total:</td>
                <td>$<?php echo number_format($total, 2); ?></td>
            </tr>
            <tr>
                <td colspan="3">Tax:</td>
                <td>$<?php echo number_format($tax, 2); ?></td>
            </tr>
            <tr>
                <td colspan="3">Total with Tax:</td>
                <td>$<?php echo number_format($totalWithTax, 2); ?></td>
            </tr>

        </table>

    <?php
    } else {
        echo "<p>No items selected.</p>";
    }
    ?>


<!--Footer -->
<footer>
      Group 3 <br>
      <a href="../pages/bbao_landing.html">Brian Bao</a> •
      <a href="../angel/angel_landing.html">Angel Crowe</a> •
      <a href="../pages/login-christopher.html">Christopher Flores</a> •
      <a href="../pages/cjLanding.html">Christian Jaime</a> •
      <a href="../salman/landing-page/landingpage.html">Salman Khan</a> •
      <a href="../pages/landing_Mubeensahibzada.html">Mubeen Sahibzada</a>
    </footer>

</body>

</html>
