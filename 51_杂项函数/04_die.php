<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午5:50
 */

//die() 函数输出一条消息，并退出当前脚本。该函数是 exit() 函数的别名。
$site = "http://www.w3cschool.cc/";
fopen($site, "r") or die("Unable to connect to $site");
?>