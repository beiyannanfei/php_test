<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:33
 */

//set_error_handler() 函数设置用户自定义的错误处理函数。
//该函数用于创建运行期间的用户自己的错误处理方法。
//该函数返回旧的错误处理程序，如果失败则返回 NULL。
//error handler function
function customError($errno, $errstr, $errfile, $errline)
{
    echo "<b>Custom error:</b> [$errno] $errstr<br />";
    echo " Error on line $errline in $errfile<br />";
    echo "Ending Script";
    die();
}

//set error handler
set_error_handler("customError");

$test = 2;

//trigger error
if ($test > 1) {
    trigger_error("A custom error has been triggered");
}
?>