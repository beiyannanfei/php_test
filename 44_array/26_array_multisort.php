<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午4:48
 */

$a = array("Dog", "Cat", "Horse", "Bear", "Zebra");
//array_multisort() 函数返回一个排序数组。您可以输入一个或多个数组。函数先对第一个数组进行排序，
//接着是其他数组，如果两个或多个值相同，它将对下一个数组进行排序。
//注释：字符串键名将被保留，但是数字键名将被重新索引，从 0 开始，并以 1 递增。
//注释：您可以在每个数组后设置排序顺序和排序类型参数。如果没有设置，每个数组参数会使用默认值。
array_multisort($a);
print_r($a);    //Array ( [0] => Bear [1] => Cat [2] => Dog [3] => Horse [4] => Zebra )

?>