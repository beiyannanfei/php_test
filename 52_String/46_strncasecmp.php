<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午5:48
 */

//strncasecmp() 函数比较两个字符串（不区分大小写）。
//注释：strncasecmp() 是二进制安全的，且不区分大小写。
//提示：该函数与 strcasecmp() 函数类似，不同的是，strcasecmp() 没有 length 参数。

echo strncasecmp("Hello world!", "hello earth!", 6);
?>