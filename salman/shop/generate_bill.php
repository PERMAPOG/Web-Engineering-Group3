<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <link rel="stylesheet" type="text/css" href="bill.css">
</head>
<body>
    <h1>Invoice</h1>

    <?php
    if(isset($_POST['items']) && is_array($_POST['items']) && !empty($_POST['items'])) {
        $selectedItems = $_POST['items'];
        
        $itemPrices = [
            "Iphone" => 100.00,
            "Ipad" => 200.00,
            "Airpods" => 150.00,
            "Headphone" => 250.00,
            "Laptop" => 300.00,
            "PC" => 500.00
        ];
    

        $totalCost = 0;

        echo "<h2>Selected Items:</h2>";
        foreach ($_POST['items'] as $itemName => $itemImage) {
            echo "<img src='$itemImage' alt='$itemName' width='80' height='80' />";
            echo $itemName . " - $" . $itemPrices[$itemName] . "<br>";
                $totalCost += $itemPrices[$itemName];
            }



        // Calculate Shipping Cost
        if(isset($_POST['shipping'])) {
            $shippingCost = ($_POST['shipping'] === "standard") ? 5.00 : 15.00;
            echo "<h2>Shipping:</h2>";
            echo $_POST['shipping'] . " Shipping - $" . $shippingCost . "<br>";
            $totalCost += $shippingCost;
        }

        // Calculate Taxes (Assuming 10% tax rate)
        $taxRate = 0.10;
        $taxAmount = $totalCost * $taxRate;

        echo "<h2>Total Cost:</h2>";
        echo "Total Cost: $" . $totalCost . "<br>";
        echo "Taxes (10%): $" . $taxAmount . "<br>";

        // Calculate Final Cost
        $finalCost = $totalCost + $taxAmount;
        echo "<h2>Final Cost:</h2>";
        echo "Final Cost: $" . $finalCost;
    }
    else {
        echo "<p>No items selected.</p>";
    }
    ?>

    <p><a href="shop.html">Back to Shopping Cart</a></p>
</body>
</html>
