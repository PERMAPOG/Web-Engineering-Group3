<?php
$taxRate = 0.1; // tax rate

$records = array(
    "Areca Palm" => 89.99,
    "Queen Palm" => 149.99,
    "Date Palm" => 199.99,
    "Coconut Palm" => 299.99,
    "Sago Palm" => 79.99,
    "Windmill Palm" => 109.99,
    "Pindo Palm" => 139.99,
    "Bismarck Palm" => 159.99,
    "Majesty Palm" => 69.99,
    "Triangle Palm" => 129.99,
    "Bottle Palm" => 99.99,
    "Spindle Palm" => 89.99
);

$selectedPalms = $_POST['palm'] ?? [];
$quantities = $_POST['quantity'] ?? [];

$totalCost = 0;
?>

<h1>Receipt</h1>

<table border="1">
    <tr>
        <th>Palm Tree</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>

    <?php
    foreach($selectedPalms as $palmName) {
        $palmPrice = $records[$palmName];
        $quantity = isset($quantities[$palmName]) ? $quantities[$palmName] : 1;
        $subtotal = $palmPrice * $quantity;
        $totalCost += $subtotal;
        echo "<tr>";
        echo "<td>$palmName</td>";
        echo "<td>$palmPrice</td>";
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

<a href="nursery.html">Go back to shopping</a>
