<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午2:22
 */

$a1 = array("a" => "red", "b" => "green1", "c1" => "blue", "d" => "yellow");
$a2 = array("a" => "red", "b" => "green2", "c2" => "blue", "e" => "pink");

$result = array_diff_assoc($a1, $a2);   //比较两个数组的键名和键值，并返回差集
print_r($result);       //Array ( [b] => green1 [c1] => blue [d] => yellow )
echo "<br>";
$result = array_diff_assoc($a2, $a1);   //比较两个数组的键名和键值，并返回差集
print_r($result);       //Array ( [b] => green2 [c2] => blue [e] => pink )
echo "<hr>";

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("a" => "red", "f" => "green", "g" => "blue");
$a3 = array("h" => "red", "b" => "green", "g" => "blue");

$result = array_diff_assoc($a1, $a2, $a3);  //返回一个差集数组，该数组包括了所有在被比较的数组（array1）中，但是不在任何其他参数数组（array2 或 array3 等等）中的键名和键值
print_r($result);   //Array ( [c] => blue [d] => yellow )
?>