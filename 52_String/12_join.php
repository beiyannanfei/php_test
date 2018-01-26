<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午12:04
 */

//join() 函数返回一个由数组元素组合成的字符串。
//join() 函数是 implode() 函数的别名。
//注释：join() 函数接受两种参数顺序。但是由于历史原因，explode() 是不行的，您必须保证 separator 参数在 string 参数之前才行。
//注释：join() 函数的 separator 参数是可选的。但是为了向后兼容，推荐您使用两个参数。

$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo join(" ", $arr);   //Hello World! Beautiful Day!

?>