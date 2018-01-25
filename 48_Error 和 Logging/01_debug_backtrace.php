<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:07
 */

//debug_backtrace() 函数生成 backtrace。
//该函数显示由 debug_backtrace() 函数代码生成的数据。
//返回一个关联数组
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
    print_r(debug_backtrace());
}

one("Peter", "Griffin");
/*
Array
(
    [0] => Array
        (
            [file] => /Users/sensoro/bynf/PHP/mytest/48_Error 和 Logging/01_debug_backtrace.php
            [line] => 20
            [function] => three
            [args] => Array
                (
                    [0] => Cleveland
                    [1] => Brown
                )

        )

    [1] => Array
        (
            [file] => /Users/sensoro/bynf/PHP/mytest/48_Error 和 Logging/01_debug_backtrace.php
            [line] => 15
            [function] => two
            [args] => Array
                (
                    [0] => Glenn
                    [1] => Quagmire
                )

        )

    [2] => Array
        (
            [file] => /Users/sensoro/bynf/PHP/mytest/48_Error 和 Logging/01_debug_backtrace.php
            [line] => 28
            [function] => one
            [args] => Array
                (
                    [0] => Peter
                    [1] => Griffin
                )

        )

)
*/
?>