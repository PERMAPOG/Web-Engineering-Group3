    <?php
    if(isset($_POST['fish']) && is_array($_POST['fish']) && !empty($_POST['fish'])) {
        $selectedFish = $_POST['fish'];
        
        $fishPrices = [
            "Salmon" => 10.00,
            "Tuna" => 15.00,
            "Albacore" => 20.00,
            "Yellowtail" => 25.00,
            "Scallop" => 40.00,
            "Shrimp" => 5.00,
			"Crab" => 35.00,
            "Lobster" => 100.00,
            "Eel" => 50.00,
            "Snapper" => 60.00,
            "Carp" => 55.00,
            "Tilapia" => 45.00
        ];
    

        $totalCost = 0;

        echo "<h2>Selected Items:</h2>";
        foreach ($_POST['fish'] as $fishName => $fishName) {
            echo $fishName . " - $" . $fishPrices[$fishName] . "<br>";
                $totalCost += $fishPrices[$fishName];
            }

        $taxRate = 0.10;
        $taxAmount = $totalCost * $taxRate;

        echo "<h2>Total Cost:</h2>";
        echo "Total Cost: $" . $totalCost . "<br>";
        echo "Taxes (10%): $" . $taxAmount . "<br>";

        $finalCost = $totalCost + $taxAmount;
        echo "<h2>Final Cost:</h2>";
        echo "Final Cost: $" . $finalCost;
    }
    else {
        echo "<p>No items selected.</p>";
    }
    ?>
	
	

	
