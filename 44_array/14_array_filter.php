<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午4:26
 */

function test_odd($var)
{
    return ($var & 1);
}

$a1 = array("a", "b", 2, 3, 4);
//array_filter() 函数用回调函数过滤数组中的元素。
//该函数把输入数组中的每个键值传给回调函数。如果回调函数返回 true，则把输入数组中的当前键值返回给结果数组。数组键名保持不变。
print_r(array_filter($a1, "test_odd")); //Array ( [3] => 3 )

?>