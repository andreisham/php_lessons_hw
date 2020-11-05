<?php
if(!isset($_SESSION['user_id'])) {
    redirect('/index.php');
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
    redirect($_SERVER['REQUEST_URI']);
}

$product = null;
if ($id = get('id')){
    $product = getProductById($id);
}
echo render('admin/edit', ['product' => $product]);
