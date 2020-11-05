<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "catalog.php";
require_once ENGINE_DIR . "base.php";
require_once ENGINE_DIR . "products.php";


/*
 * доделать удаление из корзины
 * почему при переходе на эту страницу напрямую нет сессии и возникает ошибка,
 * а при переходе через кнопку "Добавить в корзину" все работает?
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quantity = post('quantity');
    $id = post('id');

    add_to_basket($id, $quantity);

}
include VIEWS_DIR . "basket.php";