<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "gallery.php";
require_once ENGINE_DIR . "files.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // проверка на метод отправки
    uploadFile('image', IMG_DIR);
    $fileName = $_FILES['image']['name'];
    addImage($fileName,$fileName);
}

$images = getGalleryImages();

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
