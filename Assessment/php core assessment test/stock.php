<?php
$stockFile = "fruit_stock.json";

if (!file_exists($stockFile)) {
    file_put_contents($stockFile, json_encode([]));
}

function loadStock() {
    global $stockFile;
    return json_decode(file_get_contents($stockFile), true);
}

function saveStock($stock) {
    global $stockFile;
    file_put_contents($stockFile, json_encode($stock, JSON_PRETTY_PRINT));
}

function handleStockRequest() {
    $stock = loadStock();
    $fruitName = $_POST['fruit_name'] ?? '';
    $quantity = (int) ($_POST['quantity'] ?? 0);
    $action = $_POST['action'] ?? '';

    if ($fruitName === '' || $quantity < 0) {
        echo "<p class='error'>Invalid input. Please enter valid fruit name and quantity.</p>";
        return;
    }

    if ($action === 'add') {
        $stock[$fruitName] = isset($stock[$fruitName]) ? $stock[$fruitName] + $quantity : $quantity;
        echo "<p class='success'>Fruit stock added successfully!</p>";
    } elseif ($action === 'update') {
        if (!isset($stock[$fruitName])) {
            echo "<p class='error'>Fruit not found in stock.</p>";
            return;
        }
        $stock[$fruitName] = $quantity;
        echo "<p class='success'>Fruit stock updated successfully!</p>";
    }

    saveStock($stock);
}
