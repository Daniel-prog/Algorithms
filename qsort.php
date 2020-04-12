<?php

function qsort(&$array)
{

    $left = 0;
    $right = count($array) - 1;

    my_sort($array, $left, $right);

}

/*
* Функция, непосредственно производящая сортировку.
* Так как массив передается по ссылке, ничего не возвращает.
*/

function my_sort(&$array, $left, $right)
{

//Создаем копии пришедших переменных, с которыми будем манипулировать в дальнейшем.
    $l = $left;
    $r = $right;

//Вычисляем 'центр', на который будем опираться. Берем значение ~центральной ячейки массива.
    $center = $array[(int)($left + $right) / 2];

//Цикл, начинающий саму сортировку
    do {

//Ищем значения больше 'центра'
        while ($array[$r] > $center) { //5, 3, 4, 1, 7, 2 // 2 3 4 1 7 5 // 2 3 1 4 7 5 // 2 1 3 4 5 7
            $r--;
        }

//Ищем значения меньше 'центра'
        while ($array[$l] < $center) {
            $l++;
        }

//После прохода циклов проверяем счетчики циклов
        if ($l <= $r) {

//И если условие true, то меняем ячейки друг с другом.
            list($array[$r], $array[$l]) = array($array[$l], $array[$r]);

//И переводим счетчики на следующий элементы
            $l++; //3 //2
            $r--;//2 //1
        }

//Повторяем цикл, если true
    } while ($l <= $r);

    if ($r > $left) {
//Если условие true, совершаем рекурсию
//Передаем массив, исходное начало и текущий конец
        my_sort($array, $left, $r);
    }

    if ($l < $right) {
//Если условие true, совершаем рекурсию
//Передаем массив, текущие начало и конец
        my_sort($array, $l, $right);
    }

//Сортировка завершена

}

$array = [5, 3, 4, 1, 7, 2];
echo 'Исходный массив: ';
foreach ($array as $a) {
    echo $a . " ";
}
echo '<br>';
qsort($array);

echo 'Отсортированный массив: ';

foreach ($array as $a) {
    echo $a . ' ';
}