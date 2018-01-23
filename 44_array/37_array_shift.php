<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:32
 */

$a = array("a" => "red", "b" => "green", "c" => "blue");
//array_shift() 函数用于删除数组中的第一个元素，并返回被删除的元素。
//注释：如果键名是数字的，所有元素都将获得新的键名，从 0 开始，并以 1 递增（参见下面实例）。
echo array_shift($a) . "<br>";  //red
print_r($a);    //Array ( [b] => green [c] => blue )

?>