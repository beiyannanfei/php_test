<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午5:18
 */

//strcasecmp() 函数比较两个字符串。

//比较两个字符串（不区分大小写
echo strcasecmp("Hello world!", "HELLO WORLD!") . "<br>";    //0

echo strcasecmp("Hello world!1", "HELLO WORLD!") . "<br>";    //1

echo strcasecmp("Hello world!", "HELLO WORLD!1") . "<br>";    //-1
?>