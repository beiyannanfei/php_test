<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午2:46
 */
//基本的错误处理：使用 die() 函数

if (!file_exists("welcome.txt")) {
    die("文件不存在");
} else {
    $file = fopen("welcome.txt", "r");
}
?>