<?php
/**
а) Создайте массив, заполненный числами от 1 до 100

б) Дан многомерный массив $arr. Подсчитайте количество элементов этого массива. Выведите на экран

в) Дан массив $arr. Выведите на экран первый и последний элемент данного массива
 */

$arr = [[12, 'aple', 'green', 344], [34, 'white', 'pay']];

$c =0;
for ($i = 0; $i <= count($arr)-1; $i++) {
    $c+= count($arr[$i]);

}
echo $c;