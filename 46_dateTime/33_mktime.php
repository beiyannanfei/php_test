<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:36
 */
//gmmktime() 函数返回一个日期的 UNIX 时间戳。
//返回一个日期的 UNIX 时间戳，然后使用它来查找该日期的天：
echo "Oct 3, 1975 was on a " . date("l", mktime(0, 0, 0, 10, 3, 1975)); //Oct 3, 1975 was on a Friday
?>