<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:05
 */

$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

//compact() 函数创建一个包含变量名和它们的值的数组。
//注释：任何没有变量名与之对应的字符串都被略过。
$result = compact("firstname", "lastname", "age");
print_r($result);   //Array ( [firstname] => Peter [lastname] => Griffin [age] => 41 )

?>