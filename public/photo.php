<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";

// ПЛАН
/* так как скрипт пхп уже умер, делаем поновой
 * 1. получить ид из запроса
 * 2. подключиться к базе
 * 3. написать запрос на получение по айди данных фотографии
 * 4. выполнить запрос и сохранить данные в переменную
 * 5. подставить данные из переменной в верстку
 *
*/

// 1.
$id = (int) $_GET['id']; // g

// 2.
$connection = mysqli_connect(
    $config['host'],
    $config['login'],
    $config['password'],
    $config['db']
);

// 3
$sql = "select * from photos where id = {$id}";
$res = mysqli_query($connection, $sql);
$image = mysqli_fetch_all($res, MYSQLI_ASSOC)[0]; // [id], [path]

include VIEWS_DIR . "photo.php";
?>
