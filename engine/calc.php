<?php
function calculate(int $arg_1, int $arg_2, string $operation){
    switch ($operation) {
        case "+":
            return  $arg_1 + $arg_2;
        case "-":
            return  $arg_1 - $arg_2;
        case "*":
            return  $arg_1 * $arg_2;
        case "/":
            if ($arg_2 == 0){
                return "Здесь нельзя делить на ноль";
            } else {
                return $arg_1 / $arg_2;
            }
    }
}