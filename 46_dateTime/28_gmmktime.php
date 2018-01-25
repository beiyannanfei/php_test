<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午12:19
 */

//gmmktime() 函数返回 GMT 日期的 UNIX 时间戳。

//返回 GMT 日期的 UNIX 时间戳，然后使用它来查找该日期的天：
// Prints: October 3, 1975 was on a Friday
echo "Oct 3, 1975 was on a " . date("l", gmmktime(0, 0, 0, 10, 3, 1975));   //Oct 3, 1975 was on a Friday
?>