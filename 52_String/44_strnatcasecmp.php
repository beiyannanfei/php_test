<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午5:46
 */

//strnatcasecmp() 函数使用一种"自然"算法来比较两个字符串（不区分大小写）。
//在自然算法中，数字 2 小于数字 10。在计算机排序中，10 小于 2，这是因为 10 中的第一个数字小于 2。

echo strnatcasecmp("2Hello world!","10Hello WORLD!");   //-1
echo "<br>";
echo strnatcasecmp("10Hello world!","2Hello WORLD!");   //1
?>