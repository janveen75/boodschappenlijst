
<?php

$config = require('config.php');
$db = new Database($config);
$products = $db->query("select * from groceries")->fetchAll();

// Gebruik van array_reduce om de totale prijs te berekenen
$totalPrice = array_reduce($products, function($carry, $product) {
    return $carry + ($product['price'] * $product['amount']);
}, 0);



require "views/index.view.php";