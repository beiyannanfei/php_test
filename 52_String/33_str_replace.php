<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午4:57
 */

//str_replace() 函数替换字符串中的一些字符（区分大小写）。
//该函数必须遵循下列规则：
//如果搜索的字符串是一个数组，那么它将返回一个数组。
//如果搜索的字符串是一个数组，那么它将对数组中的每个元素进行查找和替换。
//如果同时需要对某个数组进行查找和替换，并且需要执行替换的元素少于查找到的元素的数量，那么多余的元素将用空字符串进行替换。
//如果是对一个数组进行查找，但只对一个字符串进行替换，那么替代字符串将对所有查找到的值起作用。

echo str_replace("world", "Peter", "Hello world!") . "<br>";   //Hello Peter!

$arr = array("blue", "red", "green", "yellow");
print_r(str_replace("red", "pink", $arr, $i));
echo "Replacements: $i" . "<br>";    //Array ( [0] => blue [1] => pink [2] => green [3] => yellow ) Replacements: 1

$find = array("Hello", "world");
$replace = array("B");
$arr = array("Hello", "world", "!");
print_r(str_replace($find, $replace, $arr));    //Array ( [0] => B [1] => [2] => ! )
?>