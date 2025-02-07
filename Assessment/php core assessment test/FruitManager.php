<?php
require_once 'functions.php';

class FruitManager {
    private $stockFile = 'fruit_stock.json';
    private $stock = [];

    public function __construct() {
        if (file_exists($this->stockFile)) {
            $this->stock = json_decode(file_get_contents($this->stockFile), true) ?? [];
        }
    }

    private function saveStock() {
        file_put_contents($this->stockFile, json_encode($this->stock, JSON_PRETTY_PRINT));
    }

    public function addFruit() {
        $name = readline("Enter fruit name: ");
        $quantity = (int) readline("Enter quantity: ");
        $price = (float) readline("Enter price: ");

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

    public function updateStock() {
        $name = readline("Enter fruit name to update: ");
        $quantity = (int) readline("Enter new quantity: ");
        $price = (float) readline("Enter new price: ");

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
