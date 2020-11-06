<?php
$basket = [];
if (!empty($_SESSION['cart_item'])) {
    $prodIds = array_filter(
        array_keys($_SESSION['cart_item']),
        function ($el){return is_int($el);}
    );
    $products = getProducts($prodIds);
    foreach ($products as $product) {
        $sumPrice = $_SESSION['cart_item'][$product['id']] * $product['price'];
        $basket[] = [
            'product' => $product,
            'quantity' => $_SESSION['cart_item'][$product['id']],
            'sumPrice' => $sumPrice
        ];
    }
}
var_dump($_SESSION);
echo render('basket', ['basket' => $basket]);