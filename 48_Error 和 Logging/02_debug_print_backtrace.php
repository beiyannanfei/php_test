<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:09
 */


//debug_print_backtrace() 函数打印 backtrace。
//该函数显示由 debug_print_backtrace() 函数代码生成的数据。

echo "<pre>";
function one($str1, $str2)
{
    two("Glenn", "Quagmire");
}

function two($str1, $str2)
{
    three("Cleveland", "Brown");
}

function three($str1, $str2)
{
    debug_print_backtrace();
}

one("Peter", "Griffin");
/*
#0  three(Cleveland, Brown) called at [/Users/sensoro/bynf/PHP/mytest/48_Error 和 Logging/02_debug_print_backtrace.php:21]
#1  two(Glenn, Quagmire) called at [/Users/sensoro/bynf/PHP/mytest/48_Error 和 Logging/02_debug_print_backtrace.php:16]
#2  one(Peter, Griffin) called at [/Users/sensoro/bynf/PHP/mytest/48_Error 和 Logging/02_debug_print_backtrace.php:29]
*/
?>