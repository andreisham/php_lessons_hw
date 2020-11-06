<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $quantity = post('quantity');
    $id = post('id');
    $increase = post('increase');
    $decrease = post('decrease');
    $delete = post('delete');

    if (isset($quantity)){
        if (isset($_SESSION["cart_item"])) {
            $_SESSION['cart_item'][$id] += $quantity;
        } else {
            $_SESSION['cart_item'][$id] = $quantity;
        }
        echo json_encode(['status' => 'success', 'message' => 'added successfuly']);
    } elseif (isset($increase)){
        if (isset($_SESSION["cart_item"])) {
            ++$_SESSION['cart_item'][$id];
        }
        redirect('/basket');
    } elseif (isset($decrease)) {
        if ($_SESSION["cart_item"][$id] > 1) {
            --$_SESSION['cart_item'][$id];
        } else {
            unset($_SESSION['cart_item'][$id]);
        }
        redirect('/basket');
    } elseif (isset($delete)){
        unset($_SESSION['cart_item'][$id]);
        redirect('/basket');
    }
}


