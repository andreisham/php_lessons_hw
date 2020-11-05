<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "products.php";
session_start();

if(!isset($_SESSION['user_id'])) {
    redirect('/index.php');
}

$products = getProducts();
include VIEWS_DIR . 'admin/products/index.php';