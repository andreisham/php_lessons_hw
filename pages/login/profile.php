<?php
$orders_ID_total = queryAll("select id,
                                        total_price,
                                        adress,
                                        phone
                                 from orders");
$sql = "select op.order_id,
               p.name,
               p.price,
               op.quantity,
               op.total_prod_price,
               o.total_price,
               o.adress,
               o.phone
        from order_products op
            join products p on op.product_id = p.id
            join orders o on op.order_id = o.id
            join users u on o.user_id = u.id
        WHERE u.id = {$_SESSION['user_id']}";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    deleteOrder();
}

echo render('/profile', ['sql' => $sql, 'orders_ID_total' => $orders_ID_total]);
