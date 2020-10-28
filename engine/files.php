<?php


function uploadFile(string $name, $destination) {
    if(isset($_FILES[$name]))
    $tmpPath = $_FILES[$name]['tmp_name']; // взяли временное имя файла
    $destination = IMG_DIR . $_FILES[$name]['name']; // указали куда его переместить
    move_uploaded_file($tmpPath, $destination); // переместили в папку img
}