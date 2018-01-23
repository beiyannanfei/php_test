<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:02
 */

function myfunction($value, $key)
{
    echo "The key $key has the value $value<br>";
}

$a1 = array("a" => "red", "b" => "green");
$a2 = array($a1, "1" => "blue", "2" => "yellow");
//array_walk_recursive() 函数对数组中的每个元素应用用户自定义函数。在函数中，数组的键名和键值是参数。
//该函数与 array_walk() 函数的不同在于可以操作更深的数组（一个数组中包含另一个数组）。
array_walk_recursive($a2, "myfunction");
/*
The key a has the value red
The key b has the value green
The key 1 has the value blue
The key 2 has the value yellow
*/
?>