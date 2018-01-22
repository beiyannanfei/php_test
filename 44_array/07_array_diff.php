<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午6:58
 */

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue", "h" => "pink");

$result = array_diff($a1, $a2); //比较两个数组的键值，并返回差集
print_r($result);   //Array ( [d] => yellow )

echo "<hr>";
$result = array_diff($a2, $a1); //比较两个数组的键值，并返回差集
print_r($result);   //Array ( [h] => pink )
?>