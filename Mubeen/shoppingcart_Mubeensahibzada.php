<?php
$taxRate = 0.1; // tax rate

$records = array(
    "Day-Date" => 48000,
    "Mickey Mouse" => 35,
    "Nautilus" => 84999,
    "Royal Oak" => 29999,
    "RM 055" => 120000,
    "Navitimer" => 13999,
  
);

$selectedWatches = $_POST['watch'] ?? [];
$quantities = $_POST['quantity'] ?? [];

$totalCost = 0;
?>

<center> <h1>Your Cart</h1> </center>
<center>
<table border="1">
    <tr>
        <th>Watch</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>

    <?php
    foreach($selectedWatches as $selecWatch) {
        $WatchPrice = $records[$selecWatch];
        $quantity = isset($quantities[$selecWatch]) ? $quantities[$selecWatch] : 1;
        $subtotal = $WatchPrice * $quantity;
        $totalCost += $subtotal;
        echo "<tr>";
        echo "<td>$selecWatch</td>";
        echo "<td>$WatchPrice</td>";
        echo "<td>$quantity</td>";
        echo "<td>$subtotal</td>";
        echo "</tr>";
    }
    ?>

    <tr>
        <td colspan="3">Total Cost</td>
        <td><?php echo $totalCost; ?></td>
    </tr>
    <tr>
        <td colspan="3">Tax 10% </td>
        <td><?php echo $totalCost * $taxRate; ?></td>
    </tr>
    <tr>
        <td colspan="3">Total Sum</td>
        <td><?php echo $totalCost + ($totalCost * $taxRate); ?></td>
    </tr>
</table>

<a href="shoppingcart_Mubeensahibzada.html">Go back to shopping</a>
</center>
