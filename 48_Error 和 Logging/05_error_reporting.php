<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:28
 */

//error_reporting() 函数规定报告哪个错误。
//该函数设置当前脚本的错误报告级别。
//该函数返回旧的错误报告级别。

//Disable error reporting
error_reporting(0);

//Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//Report all errors
error_reporting(E_ALL);
?>