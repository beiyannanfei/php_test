<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:11
 */
/*
 error_get_last() 函数获得最后发生的错误。

该函数以数组的形式返回最后发生的错误。如果没有错误发生则返回 NULL。

返回的错误数组包含 4 个键名和键值：

[type] - 错误类型
[message] - 错误消息
[file] - 发生错误所在的文件
[line] - 发生错误所在的行
*/
echo "<pre>";
echo $test;
print_r(error_get_last());
/*
Array
(
    [type] => 8
    [message] => Undefined variable: test
    [file] => /Users/sensoro/bynf/PHP/mytest/48_Error 和 Logging/03_error_get_last.php
    [line] => 21
)
*/
?>