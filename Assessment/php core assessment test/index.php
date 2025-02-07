
<?php
require_once 'stock.php';
require_once 'view.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    handleStockRequest();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Store Application</title>
    <link rel="stylesheet" href="styles.css">
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
        <?php displayStock(); ?>
    </div>
</body>
</html>
