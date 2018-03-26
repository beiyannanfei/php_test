<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:38
 */

$a = array("red", "green", "blue", "yellow", "brown");
//array_slice() 函数返回数组中的选定部分。
print_r(array_slice($a, 2));    //Array ( [0] => blue [1] => yellow [2] => brown )
echo '<hr>';

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r(array_slice($arr, 0, 3));
echo "<br>";
print_r(array_slice($arr, 3, 3));
echo "<br>";
print_r(array_slice($arr, 6, 3));
echo "<br>";
print_r(array_slice($arr, 9, 3));
echo "<br>";
?>