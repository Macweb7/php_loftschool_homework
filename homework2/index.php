<?php
require('src/functions.php');
/*$array = [
    'Я первая строка',
    'Я вторая строка',
    'Я третья строка'
];
$a = 'Hello';
echo task1($a, true);*/
task2('-', 4, 3, 2, 1);
//echo task3(homework2, 4);

//Задание #4
echo date('d.m.Y H:i');

$date = mktime(0, 0, 0, 02, 24, 2016);
echo $date;

//Задание #5
$string = 'Карл у Клары украл Кораллы';
$string2 = 'Две бутылки лимонада';

echo str_replace('К', '', $string);
echo str_replace('Две', 'Три', $string2);

task6('test.txt');
