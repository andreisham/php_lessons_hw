<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $checkout = $_POST;
    if(isset($checkout)) {
        $products = getProducts(fullBasket());
        foreach ($products as $product) {
            $sumPrice = $_SESSION['cart_item'][$product['id']] * $product['price'];
            $basket[] = [
                'product' => $product,
                'quantity' => $_SESSION['cart_item'][$product['id']],
                'sumPrice' => $sumPrice
            ];
            $sql_op = "insert into order_products (product_id, quantity, total_prod_price) 
            values ('{$product['id']}', '{$_SESSION['cart_item'][$product['id']]}', '{$sumPrice}')";
            execute($sql_op);
        }
        foreach ($basket as $item) {
            $orderCost += $item['sumPrice'];
        }
    }
    $sql_o = "insert into orders (user_id, total_price, adress, phone) 
            values ('{$_SESSION['user_id']}', '{$orderCost}', '{$checkout['adress']}', '{$checkout['phone']}')";
    execute($sql_o);
    emptyBasket();
}
redirect('/login/profile');

