<?php

$id = (int)get('id');
$info = getCatalogInfoByID($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $author = post("author");
    $text = post("text");
    addReview($id, $author, $text);
}

$reviews = getReview($id);
$info['reviews'] = $reviews;

echo render('product', ['info' => $info]);
?>

