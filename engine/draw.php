<?php
function drawMenu(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li><a href=\"#\">{$item}</a></li>";
    }
    echo "</ul>";
}
// функция вывода изображений
/*
function drawImg(string $img_dir)
{
    $img = array_slice(scandir(ROOT_DIR . $img_dir), 2); // оставляем в массиве только файлы (избавляемся от . и ..)
    foreach ($img as $item) {
        echo "<a href=\"img/{$item}\" target=\"_blank\"><img src=\"img/{$item}\" alt=\"1\" ></a>";
    }
}
*/
