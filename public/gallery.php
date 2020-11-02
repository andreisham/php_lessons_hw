<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "files.php";
/*
$connection = mysqli_connect($host, $login, $password, $db);
$id = mysqli_escape_string($connection,$_GET['id']);


$images = getFiles($connection, $id);
*/
// ПЛАН
// сделать страницу с отображением превью всех фотографий из галереи
// 1. получить список изображений
    // 1.1 подключиться к серверу бд
    // 1.2 составить селект запрос к бд
    // 1.3 выполнить запрос сохранив данные в массив
// 2. вывести все изображения из списка
    // 2.1 пройти по массиву циклом форИч
    // 2.2 вывести каждый элемент в верстку

//1.1

$connection = mysqli_connect(
    $config['host'],
    $config['login'],
    $config['password'],
    $config['db']
);

//1.2
$sql = "select * from photos";

//1.3
$res = mysqli_query($connection, $sql);
$images = mysqli_fetch_all($res, MYSQLI_ASSOC); // [id], [path]




// подключение шаблонов только в конце!
include VIEWS_DIR . "gallery.php";
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles/style.css">
        <title>Project</title>
    </head>
    <body>

    </body>
    </html>
