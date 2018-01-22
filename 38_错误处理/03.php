<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午2:54
 */
//E_USER_ERROR - 致命的用户生成的 run-time 错误。错误无法恢复。脚本执行被中断。
//E_USER_WARNING - 非致命的用户生成的 run-time 警告。脚本执行不被中断。
//E_USER_NOTICE - 默认。用户生成的 run-time 通知。在脚本发现可能有错误时发生，但也可能在脚本正常运行时发生。
// 错误处理函数
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
//    echo "脚本结束";
//    die();
}

// 设置错误处理函数
set_error_handler("customError", E_USER_WARNING);   //只要E_USER_WARNING的错误会转发的customError函数处理

// 触发错误
$test = 3;

if ($test > 2) {
    trigger_error("变量值必须小于等于 2", E_USER_NOTICE);
}

if ($test > 1) {
    trigger_error("变量值必须小于等于 1", E_USER_WARNING);
}

if ($test > 0) {
    trigger_error("变量值必须小于等于 0", E_USER_ERROR);
}

?>