<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:00
 */

function myfunction(&$value, $key)
{
    $value = "yellow";
}

$a = array("a" => "red", "b" => "green", "c" => "blue");

//array_walk() 函数对数组中的每个元素应用用户自定义函数。在函数中，数组的键名和键值是参数。
//注释：您可以通过把用户自定义函数中的第一个参数指定为引用：&$value，来改变数组元素的值（参见实例 2）。
//提示：如需操作更深的数组（一个数组中包含另一个数组），请使用 array_walk_recursive() 函数。
array_walk($a, "myfunction");
print_r($a);    //Array ( [a] => yellow [b] => yellow [c] => yellow )

?>