<?php
function fullBasket(){
    return $prodIds = array_filter(
        array_keys($_SESSION['cart_item']),
        function ($el) {
            return is_int($el);
        }
    );
}
function emptyBasket(){
    unset($_SESSION['cart_item']);
}
function deleteOrder(){
    $id = post('id');
    $sql = "DELETE FROM orders WHERE id = {$id}";
    execute($sql);
}