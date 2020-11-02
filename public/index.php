<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "files.php";
require_once ENGINE_DIR . "catalog.php";
require_once VENDOR_DIR . "funcImgResize.php";

$product_info = getCatalogInfo(); // получить информацию о товаре из бд

include VIEWS_DIR . "catalog.php";
?>

