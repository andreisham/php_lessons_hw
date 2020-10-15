<!-- 1 пункт -->
<?php
$a = -2;
$b = 5;

if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
};?>
<!-- 3 пункт -->
<?php
function sum  (int $arg1, int $arg2): int {
    return $arg1 + $arg2;
}
function difference  (int $arg1, int $arg2): int {
    return $arg1 - $arg2;
}
function multiplication (int $arg1, int $arg2): int {
    return $arg1 * $arg2;
}
function division (int $arg1, int $arg2): int {
    return $arg1 / $arg2;
}
echo "<br>Сумма " . sum(5,3) . "<br>";
echo "Разность " . difference(5,3) . "<br>";
echo "Умножение " . multiplication(5,3) . "<br>";
echo "Деление " . division(5,3) . "<br>";
?>
<!-- 4 пункт -->
<?php
function mathOperation  (int $arg1, int $arg2, string $operation) {
    switch ($operation){
        case 'Сумма':
            return $arg1 + $arg2;
        case 'Вычесть':
            return $arg1 - $arg2;
        case 'Умножить':
            return $arg1 * $arg2;
            break; // break, как я понял в случае если использовать return не на что не влияет
        case 'Разделить':
            return $arg1 / $arg2;
            break;
        default:
            return "Не правильно введен оператор";
    }
}
echo "<br> Результат математической операции: " . mathOperation(5,2, 'Разделить') . "<br>";
?>
<!-- 5 пункт -->
<?php
$title = "Какой-то важный заголовок";
$content = "Не менее важный текст";
$date = date(' \t\h\e jS \o\f F Y, l');
$tags = '<p>Simple text with tags</p>, <a href="#"> tag link</a>';
$textWithoutTags = strip_tags($tags); // удаляет все теги из строки
?>

<h1><?php echo $title ?> </h1>
<p><?= $content ?></p>
<p>Сегодня: <?= $date ?></p>
<p><?= $textWithoutTags ?></p>