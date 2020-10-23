<?php
/*
function getFiles(string $directory): array {
    return array_filter(
        scandir($directory),
        function ($item) use ($directory) {
            return !is_dir($directory . "/" . $item);
        }
    );
}
*/

//$id = mysqli_escape_string($connection,$_GET['id']);
//$sql = "select id, path from photos where id = '1'";
//$res = mysqli_query($connection, $sql);
//$file = mysqli_fetch_all($res, MYSQLI_ASSOC)[0]; // [id], [path]
//var_dump($file);

//function getFiles($connection, $id): array {
//    $sql = "select id, path from photos where id = '1'";
//    $res = mysqli_query($connection, $sql);
//    $file = mysqli_fetch_all($res, MYSQLI_ASSOC)[0]; // [id], [path]
//    return $file;
//}