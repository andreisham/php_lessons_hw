<?php
if(!isset($_SESSION['user_id'])) {
    redirect('/index.php');
}
$products = getProducts();
echo render('admin/index', ['products' => $products]);
