<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午2:28
 */
//array_diff_key() 函数用于比较两个（或更多个）数组的键名 ，并返回差集。
//该函数比较两个（或更多个）数组的键名，并返回一个差集数组，该数组包括了所有在被比较的数组（array1）中，
//但是不在任何其他参数数组（array2 或 array3 等等）中的键名。
$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "red", "c" => "blue", "d" => "pink");

$result = array_diff_key($a1, $a2);
print_r($result);   //Array ( [b] => green )
echo "<hr>";

$a1 = array("red", "green", "blue", "yellow");
$a2 = array("red", "green", "blue");
$result = array_diff_key($a1, $a2);
print_r($result);       //Array ( [3] => yellow )
echo "<hr>";

$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("c" => "yellow", "d" => "black", "e" => "brown");
$a3 = array("f" => "green", "c" => "purple", "g" => "red");
$result = array_diff_key($a1, $a2, $a3);
print_r($result);       //Array ( [a] => red [b] => green )
?>