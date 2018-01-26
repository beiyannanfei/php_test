<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午4:44
 */

//str_ireplace() 函数替换字符串中的一些字符（不区分大小写）。
//该函数必须遵循下列规则：
//如果搜索的字符串是一个数组，那么它将返回一个数组。
//如果搜索的字符串是一个数组，那么它将对数组中的每个元素进行查找和替换。
//如果同时需要对某个数组进行查找和替换，并且需要执行替换的元素少于查找到的元素的数量，那么多余的元素将用空字符串进行替换。
//如果是对一个数组进行查找，但只对一个字符串进行替换，那么替代字符串将对所有查找到的值起作用。
//注释：该函数是不区分大小写的。请使用 str_replace() 函数执行区分大小写的搜索。
//注释：该函数是二进制安全的。

echo str_ireplace("WORLD", "Peter", "Hello world!") . "<br>";   //Hello Peter!

$find = array("HELLO", "WORLD"); // This function is case-insensitive
$replace = array("B");
$arr = array("Hello", "world", "!");
print_r(str_ireplace($find, $replace, $arr));   //Array ( [0] => B [1] => [2] => ! )
?>