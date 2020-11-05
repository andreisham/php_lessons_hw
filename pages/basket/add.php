<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quantity = post('quantity');
    $id = post('id');

    if (isset($_SESSION["cart_item"])) {
        $_SESSION['cart_item'][$id] += $quantity;
    } else {
        $_SESSION['cart_item'][$id] = $quantity;
    }
}
echo json_encode(['status' => 'success', 'message' => 'added successfuly']);
