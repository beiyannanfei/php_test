<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午5:47
 */

//strnatcmp() 函数使用一种"自然"算法来比较两个字符串（区分大小写）。
//在自然算法中，数字 2 小于数字 10。在计算机排序中，10 小于 2，这是因为 10 中的第一个数字小于 2。
//注释：该函数是区分大小写的。

echo strnatcmp("2Hello world!","10Hello world!");   //-1
echo "<br>";
echo strnatcmp("10Hello world!","2Hello world!");   //1

?>