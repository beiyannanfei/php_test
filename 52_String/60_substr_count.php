<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午6:11
 */
//substr_count() 函数计算子串在字符串中出现的次数。
//注释：子串是区分大小写的。
//注释：该函数不计数重叠的子串（参见实例 2） 。
//注释：如果 start 参数加上 length 参数大于字符串长度，该函数则生成一个警告（参见实例 3）。


echo substr_count("Hello world. The world is nice", "world");   //2
?>