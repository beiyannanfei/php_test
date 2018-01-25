<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:40
 */
/*
user_error() 函数创建用户自定义的错误消息。
user_error() 函数用于在用户指定的条件下触发一个错误消息。它可以与内建的错误处理程序一起使用，或者与由 set_error_handler() 函数设置的用户自定义函数一起使用。
当您需要在运行脚本时的某个指定条件下自定义错误消息时，该函数很有用。
如果指定了一个不合法的错误类型，该函数返回 FALSE，否则返回 TRUE。
该函数是 trigger_error() 函数的别名。
*/
$test = 2;
if ($test > 1) {
    user_error("A custom error has been triggered");
}
?>