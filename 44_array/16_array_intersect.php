<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午4:29
 */

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "black", "g" => "purple");
$a3 = array("a" => "red", "b" => "black", "h" => "yellow");
//array_intersect() 函数用于比较两个（或更多个）数组的键值，并返回交集。
//该函数比较两个（或更多个）数组的键值，并返回一个交集数组，该数组包括了所有在被比较的数组（array1）中，
//同时也在任何其他参数数组（array2 或 array3 等等）中的键值。
$result = array_intersect($a1, $a2, $a3);
print_r($result);   //Array ( [a] => red )

?>