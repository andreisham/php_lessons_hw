<?php
if(!isset($_SESSION['user_id'])) {
    redirect('login');
}
$products = getProducts();
echo render('admin/index', ['products' => $products]);
