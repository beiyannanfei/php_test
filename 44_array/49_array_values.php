<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:57
 */

$a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
//array_values() 函数返回包含数组中所有的值的数组。
//提示：被返回的数组将使用数值键，从 0 开始且以 1 递增。
print_r(array_values($a));  //Array ( [0] => Peter [1] => 41 [2] => USA )

?>