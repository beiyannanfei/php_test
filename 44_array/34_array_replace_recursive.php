<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:29
 */

$a1 = array("a" => array("red"), "b" => array("green", "blue"),);
$a2 = array("a" => array("yellow"), "b" => array("black"));
//array_replace_recursive() 函数递归地使用后面数组的值替换第一个数组的值。
//提示：您可以向函数传递一个数组，或者多个数组。
//如果一个键存在于第一个数组 array1 同时也存在于第二个数组 array2，第一个数组 array1 中的值将被第二个数组 array2 中的值替换。如果一个键仅存在于第一个数组 array1，它将保持不变。如果一个键存在于第二个数组 array2，但是不存在于第一个数组 array1，则会在第一个数组 array1 中创建这个元素。如果传递了多个替换数组，它们将被按顺序依次处理，后面数组的值将覆盖之前数组的值。
//注释：如果没有为每个数组指定一个键，该函数的行为将等同于 array_replace() 函数。
print_r(array_replace_recursive($a1, $a2)); //Array ( [a] => Array ( [0] => yellow ) [b] => Array ( [0] => black [1] => blue ) )

?>