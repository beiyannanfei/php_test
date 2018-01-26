<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午6:13
 */
//substr_replace() 函数把字符串的一部分替换为另一个字符串。
//注释：如果 start 参数是负数且 length 小于或者等于 start，则 length 为 0。
//注释：该函数是二进制安全的。

echo substr_replace("Hello", "world", 0);   //world
?>