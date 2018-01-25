<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:13
 */

/*
error_log() 函数向服务器错误记录、文件或远程目标发送一个错误。
如果成功该函数返回 TRUE，如果失败该函数返回 FALSE。
*/
$test = 2;
if ($test > 1) {
    error_log("A custom error has been triggered", 0, "someone@example.com", "From: webmaster@example.com");
}
?>