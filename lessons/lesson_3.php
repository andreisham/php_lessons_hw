<?php
// циклы
/*
$i = 0;
while (++$i < 10) {
    echo $i . "<br>";
}
*/
/*
$i = 0;
do {
    echo $i . "<br>";
} while (++$i < 10);
*/
/*
for ($i = 5; $i < 10; $i++) {
    echo $i . "<br>";
}
*/

// массивы, которые на самом деле ассоциативные массивы (не однотипны и не упорядочены). Просто словарь
/*
$array = [1, 7, 8];
var_dump($array);

var_dump($array[2]);

$array[] = 100;
var_dump($array);
$array[0] = 'Hi!';
var_dump($array);
*/
    // можно писать уникальные имена для индексов
$article = [
    'Title' => 'Article',
    'Content' => 'Simple text',
    'Date' => date('Y-m-d'),
    'Author' => [
        'Name' => 'Vasya',
        'Surname' => 'Pupkin'
    ]
];
var_dump($article);

// foreach

foreach ($article as $key => $value) {
    echo "{$key} : {$value} <br>";

}