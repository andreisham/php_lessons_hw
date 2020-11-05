<?php
define('ROOT_DIR', __DIR__ . '/../');
define('PUBLIC_DIR', ROOT_DIR . 'public/');
define('ENGINE_DIR', ROOT_DIR . 'engine/');
define('IMG_DIR', PUBLIC_DIR . 'img/');
define('IMG_URL', $_SERVER['REQUEST_SCHEME']. '://'. $_SERVER['HTTP_HOST'].'/img/');
define('VIEWS_DIR', ROOT_DIR . 'views/');
define('CONFIG_DIR', __DIR__ . '/');
define('VENDOR_DIR', ROOT_DIR . 'vendor/');
define('PAGES_DIR', ROOT_DIR . 'pages/');
define('DEFAULT_CONTROLLER', 'product');
define('DEFAULT_ACTION', 'index');
