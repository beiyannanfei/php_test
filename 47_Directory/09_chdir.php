<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:01
 */
//chdir() 函数改变当前的目录。
// Get current directory
echo getcwd() . "<br>";

// Change directory
chdir("../");

// Get current directory
echo getcwd();

?>