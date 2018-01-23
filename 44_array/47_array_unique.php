<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:52
 */

$a = array("a" => "red", "b" => "green", "c" => "red");
//array_unique() 函数用于移除数组中重复的值。如果两个或更多个数组值相同，只保留第一个值，其他的值被移除。
//注释：被保留的数组将保持第一个数组项的键名类型。
print_r(array_unique($a));  //Array ( [a] => red [b] => green )

?>