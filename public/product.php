<?php
// страница товара

require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "catalog.php";
require_once ENGINE_DIR . "base.php";


$id = (int)get('id');
$info = getCatalogInfoByID($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $author = post("author");
    $text = post("text");
    addReview($id, $author, $text);
}

$reviews = getReview($id);
include VIEWS_DIR . "product.php";
?>

