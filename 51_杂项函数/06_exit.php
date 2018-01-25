<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午5:56
 */

//exit() 函数输出一条消息，并退出当前脚本。该函数是 die() 函数的别名。

$site = "http://www.w3cschool.cc/";
fopen($site, "r") or exit("Unable to connect to $site");

?>