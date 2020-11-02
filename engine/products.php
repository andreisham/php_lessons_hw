<?php
require_once ENGINE_DIR . "db.php";

function getAllProducts()
{
    return queryAll("SELECT * FROM products");
}

function addImage(string $path) {
    return execute("update product_images set path = '$path' order by id desc limit 1");
}

function getProductById($id)
{
    return queryOne("SELECT * FROM products WHERE id = {$id}");
}

function updateProduct(int $id, array $data) {
    if(empty($data)) {
        return null;
    }
    $update_fields = [];
    foreach ($data as $key => $value) {
        $value = is_numeric($value) ?: "'$value'";
        $update_fields[] = "{$key} = {$value}";
    }
    $update_fields = implode(", ", $update_fields);

    $sql = "UPDATE products SET {$update_fields} WHERE id = {$id}";
    return execute($sql);
}

function createProduct(array $data) {
    if(empty($data)) {
        return null;
    }


    $sql = "INSERT INTO products (name, description, price, full_description) 
            VALUES ('{$data['name']}', '{$data['description']}', {$data['price']}, '{$data['full_description']}')";

    return execute($sql);
}

function add_to_basket($id, $quantity){
    $sql = "select name, price from products 
            where id = '{$id}'";
    $item = queryOne($sql);
    $sumPrice = $item['price'] * $quantity;
    session_start();
    if (isset($_SESSION["cart_item_{$id}"]['id'])){
        if ($item) {
            $_SESSION["cart_item_{$id}"]['id'] += $id;
            $_SESSION["cart_item_{$id}"]['name'] = $item['name'];
            $_SESSION["cart_item_{$id}"]['price'] = $item['price'];
            $_SESSION["cart_item_{$id}"]['quantity'] += $quantity;
            $_SESSION["cart_item_{$id}"]['sumPrice'] = $sumPrice + ($sumPrice * $quantity);
        }
    } else {
        $_SESSION["cart_item_{$id}"]['id'] = $id;
        $_SESSION["cart_item_{$id}"]['name'] = $item['name'];
        $_SESSION["cart_item_{$id}"]['price'] = $item['price'];
        $_SESSION["cart_item_{$id}"]['quantity'] = $quantity;
        $_SESSION["cart_item_{$id}"]['sumPrice'] = $sumPrice;
    }
}
