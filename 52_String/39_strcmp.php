<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午5:26
 */
//strcmp() 函数比较两个字符串。
//注释：strcmp() 函数是二进制安全的，且区分大小写。
//提示：该函数与 strncmp() 函数类似，不同的是，通过 strncmp() 您可以指定每个字符串用于比较的字符数。

//比较两个字符串（区分大小写）：
echo strcmp("Hello world!", "Hello world!") . "<br>";    //0
echo strcmp("Hello world!1", "Hello world!") . "<br>";    //1
echo strcmp("Hello world!", "Hello world!1") . "<br>";    //-1

?>