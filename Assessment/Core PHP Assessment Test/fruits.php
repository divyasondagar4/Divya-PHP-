<?php
// File for storing fruit stock
$stockFile = "fruit_stock.json";

// Initialize or Load Fruit Stock
if (!file_exists($stockFile)) {
    file_put_contents($stockFile, json_encode([]));
}

// Load existing stock from the file
function loadStock() {
    global $stockFile;
    return json_decode(file_get_contents($stockFile), true);
}

// Save stock back to the file
function saveStock($stock) {
    global $stockFile;
    file_put_contents($stockFile, json_encode($stock));
}

// Add fruit stock
function addFruitStock() {
    $stock = loadStock();
    $fruitName = $_POST['fruit_name'] ?? '';
    $quantity = (int) ($_POST['quantity'] ?? 0);

    if ($fruitName === '' || $quantity <= 0) {
        echo "<p class='error'>Invalid input. Please enter valid fruit name and quantity.</p>";
        return;
    }

    $stock[$fruitName] = isset($stock[$fruitName]) ? $stock[$fruitName] + $quantity : $quantity;
    saveStock($stock);
    echo "<p class='success'>Fruit stock added successfully!</p>";
}

// Update fruit stock
function updateFruitStock() {
    $stock = loadStock();
    $fruitName = $_POST['fruit_name'] ?? '';
    $quantity = (int) ($_POST['quantity'] ?? 0);

    if ($fruitName === '' || $quantity < 0) {
        echo "<p class='error'>Invalid input. Please enter valid fruit name and quantity.</p>";
        return;
    }

    if (!isset($stock[$fruitName])) {
        echo "<p class='error'>Fruit not found in stock.</p>";
        return;
    }

    $stock[$fruitName] = $quantity;
    saveStock($stock);
    echo "<p class='success'>Fruit stock updated successfully!</p>";
}

// Display fruit stock
function viewFruitStock() {
    $stock = loadStock();
    if (empty($stock)) {
        echo "<p class='info'>No fruits in stock.</p>";
        return;
    }

    echo "<h3>Fruit Stock:</h3><ul>";
    foreach ($stock as $fruit => $quantity) {
        echo "<li>$fruit: $quantity</li>";
    }
    echo "</ul>";
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'add') {
        addFruitStock();
    } elseif ($action === 'update') {
        updateFruitStock();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Store Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1, h3 {
            text-align: center;
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #45a049;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .success {
            color: green;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .info {
            color: #555;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fruit Store Application</h1>

        <form method="POST">
            <h3>Add or Update Stock</h3>
            <label for="fruit_name">Fruit Name:</label>
            <input type="text" name="fruit_name" id="fruit_name" required>
            
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
            
            <label for="action">Action:</label>
            <select name="action" id="action" required>
                <option value="add">Add Stock</option>
                <option value="update">Update Stock</option>
            </select>

            <button type="submit">Submit</button>
        </form>

        <h3>View Stock</h3>
        <?php viewFruitStock(); ?>
    </div>
</body>
</html>
