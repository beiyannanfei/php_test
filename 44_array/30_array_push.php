<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:22
 */

$a = array("a" => "red", "b" => "green");
//array_push() 函数向数组尾部插入一个或多个元素。
//提示：您可以添加一个或者多个值。
//注释：即使您的数组有字符串键名，您所添加的元素将是数字键名（参见下面的实例）。
array_push($a, "blue", "yellow");
print_r($a);    //Array ( [a] => red [b] => green [0] => blue [1] => yellow )

?>