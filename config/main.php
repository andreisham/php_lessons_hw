<?php
define('ROOT_DIR', __DIR__ . '/../');
define('PUBLIC_DIR', ROOT_DIR . 'public/');
define('ENGINE_DIR', ROOT_DIR . 'engine/');
define('IMG_DIR', PUBLIC_DIR . 'img/');
define('IMG_URL', $_SERVER['REQUEST_SCHEME']. '://'. $_SERVER['HTTP_HOST'].'/img/');
define('VIEWS_DIR', ROOT_DIR . 'views/');

//DB
$config = [
    'host' => '127.0.0.1',
    'login' => 'root',
    'password' => 'root',
    'db' => 'php2020',
];

