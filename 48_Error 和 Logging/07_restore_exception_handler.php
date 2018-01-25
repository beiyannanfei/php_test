<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:31
 */

/*
restore_exception_handler() 函数恢复之前的异常处理程序。
该函数用于在通过 set_exception_handler() 函数改变后恢复之前的异常处理程序。
该函数总是返回 TRUE。
*/
restore_exception_handler();
throw new Exception('Uncaught Exception occured');
?>