<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "products.php";
require_once ENGINE_DIR . "files.php";
session_start();

if(!isset($_SESSION['user_id'])) {
    redirect('/login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = post('product');
    if (isset($product['id'])) {
        $id = $product['id'];
        unset($product['id']);
        updateProduct($id, $product);
        uploadFile('image', IMG_DIR);
        $fileName = $_FILES['image']['name'];
        addImage($fileName);
    }else {
        createProduct($product);
        uploadFile('image', IMG_DIR);
        $fileName = $_FILES['image']['name'];
        addImage($fileName);
    }
    // функция для редиректа на эту же страницу
    // (избавляемся от повторного создания записи при обновлении страницы)
    redirect($_SERVER['REQUEST_URI']);
}

$product = null;
if ($id = get('id')){
    $product = getProductById($id);
}

include VIEWS_DIR . 'admin/products/edit.php';