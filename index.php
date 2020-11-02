<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ROOT_DIR . "engine/draw.php";

$img_dir = '/public/img'; // директория с изображениями
$menu = [];

$f = fopen(ROOT_DIR . '/data/menu.txt', 'a+');

while($string = fgets($f)) {
    $menu[] = $string;
};
fclose($f);

drawMenu($menu);
// функция должна быть в draw.php
function drawImg(string $img_dir) {
    $img = array_slice(scandir(ROOT_DIR . $img_dir),2); // оставляем в массиве только файлы (избавляемся от . и ..)
    foreach ($img as $item){
        echo "<a href=\"img/{$item}\" target=\"_blank\"><img src=\"img/{$item}\" alt=\"1\" ></a>";
    }
}
drawImg($img_dir) //

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