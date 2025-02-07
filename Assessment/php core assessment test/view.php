 <?php
function displayStock() {
    $stock = loadStock();
    if (empty($stock)) {
        echo "<p class='info'>No fruits in stock.</p>";
        return;
    }

    echo "<ul>";
    foreach ($stock as $fruit => $quantity) {
        echo "<li>$fruit: $quantity</li>";
    }
    echo "</ul>";
}
