<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午5:24
 */

function myfunction($v1, $v2)
{
    return $v1 . "-" . $v2;
}

$a = array("Dog", "Cat", "Horse");
//array_reduce() 函数发送数组中的值到用户自定义函数，并返回一个字符串。
//注释：如果数组是空的或者初始值未传递，该函数返回 NULL。
print_r(array_reduce($a, "myfunction"));    //-Dog-Cat-Horse

?>