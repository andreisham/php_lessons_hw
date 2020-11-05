<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "autoload.php";
require_once VENDOR_DIR . "funcImgResize.php";
session_start();

if(!$requestUri = preg_replace(['#^/#', '#[?].*#'], "", $_SERVER['REQUEST_URI'])){
    $requestUri = DEFAULT_CONTROLLER;
}

$parts = explode("/", $requestUri);
$page = $parts[0];
$action = $parts[1] ?? DEFAULT_ACTION;
$scriptName = PAGES_DIR . $page . "/" . $action . ".php";

include $scriptName;