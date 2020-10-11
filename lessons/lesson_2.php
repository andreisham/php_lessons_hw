<?php /*
// условные выражения
define("ROLE_USER", 1);
define("ROLE_ADMIN", 2);
define("ROLE_MODER", 3);

$userRole = ROLE_USER;

if ($userRole == ROLE_ADMIN) {
    echo "Admin panel <br>";
} elseif ($userRole == ROLE_MODER){
    echo "Moder panel <br>";
} elseif ($userRole == ROLE_USER){
    echo "User panel <br>";
}  else {
    echo "Others panel <br>";
}

// тернарный оператор (exp) ? true : false;

$permission = ($userRole == ROLE_ADMIN) ? 1111 : 0001;

// switch (без необходимости не желательно)

switch ($userRole) {
    case ROLE_ADMIN:
        echo "Admin panel <br>";
        break;
    case ROLE_MODER:
        echo "Moder panel <br>";
        break;
    case ROLE_USER:
        echo "User panel <br>";
        break;
    default:
        echo "Others panel <br>";
};

echo "наш сайт";
*/

// функции

echo calculateAverage(2, 5);

function calculateAverage(int $arg1, int $arg2): int { // int в скобках это проверка аргументов
    return ($arg1 + $arg2) / 2;
}
// рекурсивные функции на примере факториала

function factorial(int $n): int {
    if ($n == 1){
        return $n;
    }
    return $n * factorial($n - 1);
}
echo factorial(5);

// замыкание функции 'use ($x)'
// (возможность функции брать значения из родительской области видимости)

$arr = [2, 4, 8];
$x = 3;
$power = function($elem) use ($x) {return $elem ** $x;};

var_dump(array_map($power, $arr));
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
