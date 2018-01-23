<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:43
 */

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("a" => "purple", "b" => "orange");
//array_splice() 函数从数组中移除选定的元素，并用新元素取代它。函数也将返回被移除元素的数组。
//提示：如果函数没有移除任何元素（length=0），则替代数组将从 start 参数的位置插入（参见实例 2）。
//注释：不保留替代数组中的键名。

array_splice($a1, 0, 2, $a2);
print_r($a1);   //Array ( [0] => purple [1] => orange [c] => blue [d] => yellow )


?>