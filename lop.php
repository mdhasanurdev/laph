<?php

$colors = ['red', 'green', 'blue'];

foreach ($colors as $key => $color) {
    echo "$key: $color\n";
}

echo "====================\n";

$invoices = [
    [
        'product_name' => 'Wireless Mouse',
        'price' => 1200,
        'rating' => 3.8
    ],
    [
        'product_name' => 'USB-C Charger',
        'price' => 1800,
        'rating' => 4.2
    ],
    [
        'product_name' => 'Mechanical Keyboard',
        'price' => 4500,
        'rating' => 4.8
    ],
    [
        'product_name' => '27-inch Monitor',
        'price' => 17500,
        'rating' => 4.7
    ],
    [
        'product_name' => 'Laptop Stand',
        'price' => 950,
        'rating' => 4.3
    ]
];

$price = 0;
$rating = 0;


foreach ($invoices as $invoice) {
    $price = $price + $invoice['price'];
    $rating = $rating + $invoice['rating'] / count($invoices);
}

echo "Total price: $price\n";
echo "Average rating: $rating\n";