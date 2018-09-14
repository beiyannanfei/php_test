<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午4:45
 */

$a1 = array("a" => "red", "b" => "green");
$a2 = array("c" => "blue", "b" => "yellow");
//array_merge() 函数用于把一个或多个数组合并为一个数组。
//提示：您可以向函数输入一个或者多个数组。
//注释：如果两个或更多个数组元素有相同的键名，则最后的元素会覆盖其他元素。
//注释：如果您仅仅向 array_merge() 函数输入一个数组，且键名是整数，则该函数将返回带有整数键名的新数组，其键名以 0 开始进行重新索引（参见下面的实例 1）。
//提示：该函数与 array_merge_recursive() 函数之间的不同是在处理两个或更多个数组元素有相同的键名的情况。
//array_merge_recursive() 不会进行键名覆盖，而是将多个相同键名的值递归组成一个数组。
print_r(array_merge($a1, $a2)); //Array ( [a] => red [b] => yellow [c] => blue )
print_r($a1);
print_r($a2);
?>