<?php
$basket = [];
if (!empty($_SESSION['cart_item'])) {
    $products = getProducts(fullBasket());
    foreach ($products as $product) {
        $sumPrice = $_SESSION['cart_item'][$product['id']] * $product['price'];
        $basket[] = [
            'product' => $product,
            'quantity' => $_SESSION['cart_item'][$product['id']],
            'sumPrice' => $sumPrice
        ];
    }
}

echo render('basket', ['basket' => $basket]);