<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午5:49
 */

//strncmp() 函数比较两个字符串（区分大小写）。
//注释：strncmp() 是二进制安全的，且区分大小写。
//提示：该函数与 strcmp() 函数类似，不同的是，strcmp() 没有 length 参数。


echo strncmp("Hello world!", "Hello earth!", 6);    //0
?>