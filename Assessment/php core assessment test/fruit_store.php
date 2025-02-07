<?php

class FruitStore {
    private $stock = [];
    private $file = 'fruit_stock.json';

    public function __construct() {
        if (file_exists($this->file)) {
            $this->stock = json_decode(file_get_contents($this->file), true);
        }
    }

    public function saveStock() {
        file_put_contents($this->file, json_encode($this->stock, JSON_PRETTY_PRINT));
    }

    public function addFruit($name, $quantity, $price) {
        if (isset($this->stock[$name])) {
            $this->stock[$name]['quantity'] += $quantity;
            $this->stock[$name]['price'] = $price;
        } else {
            $this->stock[$name] = ['quantity' => $quantity, 'price' => $price];
        }
        $this->saveStock();
        echo "Fruit added successfully!\n";
    }

    public function viewStock() {
        echo "\nCurrent Stock:\n";
        foreach ($this->stock as $name => $data) {
            echo "$name: {$data['quantity']} available at \${$data['price']} each\n";
        }
    }

    public function updateStock($name, $quantity, $price) {
        if (isset($this->stock[$name])) {
            $this->stock[$name]['quantity'] = $quantity;
            $this->stock[$name]['price'] = $price;
            $this->saveStock();
            echo "Stock updated successfully!\n";
        } else {
            echo "Fruit not found!\n";
        }
    }
}

function displayMenu() {
    echo "\nFruit Store Menu:\n";
    echo "1. Add Fruit\n";
    echo "2. View Stock\n";
    echo "3. Update Stock\n";
    echo "4. Exit\n";
}

$store = new FruitStore();

while (true) {
    displayMenu();
    $choice = readline("Enter your choice: ");
    
    switch ($choice) {
        case 1:
            $name = readline("Enter fruit name: ");
            $quantity = (int) readline("Enter quantity: ");
            $price = (float) readline("Enter price: ");
            $store->addFruit($name, $quantity, $price);
            break;
        case 2:
            $store->viewStock();
            break;
        case 3:
            $name = readline("Enter fruit name to update: ");
            $quantity = (int) readline("Enter new quantity: ");
            $price = (float) readline("Enter new price: ");
            $store->updateStock($name, $quantity, $price);
            break;
        case 4:
            exit("Exiting application.\n");
        default:
            echo "Invalid choice! Please try again.\n";
    }
}
