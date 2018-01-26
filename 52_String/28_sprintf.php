<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午3:25
 */

//sprintf() 函数把格式化的字符串写入一个变量中。
$number = 9;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.", $number, $str);
echo $txt;  //There are 9 million bicycles in Beijing.

?>