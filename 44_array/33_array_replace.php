<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:25
 */

//array_replace() 函数使用后面数组的值替换第一个数组的值。
//提示：您可以向函数传递一个数组，或者多个数组。
//如果一个键存在于第一个数组 array1 同时也存在于第二个数组 array2，第一个数组 array1 中的值将被第二个数组 array2 中的值替换。
//  如果一个键仅存在于第一个数组 array1，它将保持不变。（详见下面的实例 1）
//如果一个键存在于第二个数组 array2，但是不存在于第一个数组 array1，则会在第一个数组 array1 中创建这个元素。（详见下面的实例 2）
//如果传递了多个替换数组，它们将被按顺序依次处理，后面数组的值将覆盖之前数组的值。（详见下面的实例 3）
//提示：请使用 array_replace_recursive() 来递归地使用后面数组的值替换第一个数组的值。

$a1 = array("red", "green");
$a2 = array("blue", "yellow");
print_r(array_replace($a1, $a2));   //Array ( [0] => blue [1] => yellow )
echo "<hr>";

$a1 = array("a" => "red", "b" => "green");
$a2 = array("a" => "orange", "burgundy");
print_r(array_replace($a1, $a2));   //Array ( [a] => orange [b] => green [0] => burgundy )
echo "<hr>";

$a1 = array("a" => "red", "green");
$a2 = array("a" => "orange", "b" => "burgundy");
print_r(array_replace($a1, $a2));   //Array ( [a] => orange [0] => green [b] => burgundy )
echo "<hr>";

$a1 = array("red", "green");
$a2 = array("blue", "yellow");
$a3 = array("orange", "burgundy");
print_r(array_replace($a1, $a2, $a3));  //Array ( [0] => orange [1] => burgundy )
echo "<hr>";

$a1 = array("red", "green", "blue", "yellow");
$a2 = array(0 => "orange", 3 => "burgundy");
print_r(array_replace($a1, $a2));   //Array ( [0] => orange [1] => green [2] => blue [3] => burgundy )

?>