<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:23
 */

$a = array("red", "green", "blue", "yellow", "brown");
//array_rand() 函数返回数组中的一个随机键名，或者如果指定函数返回键名不只一个，则返回一个包含随机键名的数组。
$random_keys = array_rand($a, 3);
echo $a[$random_keys[0]] . "<br>";
echo $a[$random_keys[1]] . "<br>";
echo $a[$random_keys[2]];

?>