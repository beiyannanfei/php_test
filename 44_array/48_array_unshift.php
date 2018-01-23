<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:52
 */

$a = array("a" => "red", "b" => "green");
//array_unshift() 函数用于向数组插入新元素。新数组的值将被插入到数组的开头。
//提示：您可以插入一个或多个值。
//注释：数值键名将从 0 开始，以 1 递增。字符串键名将保持不变。
array_unshift($a, "blue", "pink");
print_r($a);    //Array ( [0] => blue [1] => pink [a] => red [b] => green )

?>