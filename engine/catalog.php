<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

function getCatalogInfo(){
    return queryAll("select product_images.id, path, product_images.name, p.description, p.full_description from product_images
                            join products p on product_images.product_id = p.id");
}

function getCatalogInfoByID($id){
    return queryOne("select product_images.id, path, product_images.name, p.description, p.full_description, r.author, r.text, r.created_at from product_images
                            join products p on product_images.product_id = p.id
                            join reviews r on p.id = r.product_id 
                        where product_images.id = {$id}");
}

function addReview(int $product_id, string $author, string $text) {
    return execute("insert into reviews(product_id, author, text) values ('{$product_id}', '{$author}','{$text}')");
}

function getReview($id){
    return queryAll("select author, text, created_at from reviews
                            where product_id = {$id}");
}