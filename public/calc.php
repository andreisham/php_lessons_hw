<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "base.php"; // функция post()
require_once ENGINE_DIR . "calc.php"; // тут функция calculate()

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // на сколько здесь уместно было бы загнать присвоение данных в переменные внутрь цикла?
    // Думаю это бы только усложнило код..
    $arg_1 = (int) post("arg_1");
    $arg_2 = (int) post("arg_2");
    $operation = post("operation");
    $result = calculate($arg_1, $arg_2,$operation);
}
include VIEWS_DIR . "calc.php"; // верстка
?>



