<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

function getCatalogInfo(){
    return queryAll("select p.id, pi.path, p.name, p.description, p.full_description from products p
                         join product_images pi on p.id = pi.product_id");
}

function getCatalogInfoByID($id){
    return queryOne("select p.id, pi.path, p.name, p.description, p.full_description, p.price from products p
                         join product_images pi on p.id = pi.product_id
                         left join reviews r on p.id = r.product_id 
                        where p.id = {$id}");
}

function addReview(int $product_id, string $author, string $text) {
    return execute("insert into reviews(product_id, author, text) values ('{$product_id}', '{$author}','{$text}')");
}

function getReview($id){
    return queryAll("select author, text, created_at from reviews
                            where product_id = {$id}");
}