<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:34
 */


//set_exception_handler() 函数设置用户自定义的异常处理函数。
//该函数用于创建运行期间的用户自己的异常处理方法。
//该函数返回旧的异常处理程序，如果失败则返回 NULL。
function myException($exception)
{
    echo "<b>Exception:</b> ", $exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncaught Exception occurred');

?>