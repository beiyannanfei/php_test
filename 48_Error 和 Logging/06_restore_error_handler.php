<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:30
 */

//restore_error_handler() 函数恢复之前的错误处理程序。
//该函数用于在通过 set_error_handler() 函数改变后恢复之前的错误处理程序。
//该函数总是返回 TRUE。
//custom error handler function
function customError($errno, $errstr, $errfile, $errline)
{
    echo "<b>Custom error:</b> [$errno] $errstr<br />";
    echo " Error on line $errline in $errfile<br />";
}

//set user-defined error handler
set_error_handler("customError");

$test = 2;

//trigger error
if ($test > 1) {
    trigger_error("A custom error has been triggered");
}

//restore built-in error handler
restore_error_handler();

//trigger error again
if ($test > 1) {
    trigger_error("A custom error has been triggered");
}
?>