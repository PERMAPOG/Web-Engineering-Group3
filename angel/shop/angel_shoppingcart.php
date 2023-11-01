<!-- angel_shoppingcart.php -->

<!DOCTYPE html>
<html>

<head>
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
            "coffee1" => array("name" => "Coffee with Milk", "price" => 5.00, "quantity" => $_POST['coffee1']),
            // Add other items here
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

</body>

</html>
