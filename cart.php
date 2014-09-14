<?php

$products = [
    [
        'name'     => 'iPhone 6 (16G)',
        'quantity' => 0,
        'price'    => 199,
        'subtotal' => 0,
    ],
    [
        'name'     => 'iPhone 6 (64G)',
        'quantity' => 0,
        'price'    => 299,
        'subtotal' => 0,
    ],
    [
        'name'     => 'iPhone 6 (128G)',
        'quantity' => 0,
        'price'    => 399,
        'subtotal' => 0,
    ],
    [
        'name'     => 'iPhone 6 Plus (16G)',
        'quantity' => 0,
        'price'    => 299,
        'subtotal' => 0,
    ],
    [
        'name'     => 'iPhone 6 Plus (64G)',
        'quantity' => 0,
        'price'    => 399,
        'subtotal' => 0,
    ],
    [
        'name'     => 'iPhone 6 Plus (128G)',
        'quantity' => 0,
        'price'    => 499,
        'subtotal' => 0,
    ],
];

$total = 0;

function updateQuantities($quantities, $products)
{
    foreach ($quantities as $key => $qty) {
        $products[$key]['quantity'] = $qty;
        $products[$key]['subtotal'] =
            $products[$key]['quantity'] * $products[$key]['price'];
    }

    return $products;
}

function updateTotal($products)
{
    $total = 0;
    foreach ($products as $key => $product) {
        $total += $products[$key]['subtotal'];
    }
    return $total;
}