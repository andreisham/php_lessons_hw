<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

function getGalleryImages(){
    return queryAll("select * from photos order by views desc ");
}

function getGalleryImageByID($id){
    return queryOne("select * from photos where id = {$id}");
}

function incrementImageViews(int $id) {
    return execute("update photos set views = views + 1 where id = {$id}");
}

function addImage(string $path) {
   return execute("insert into photos(path) values ('$path')");
}