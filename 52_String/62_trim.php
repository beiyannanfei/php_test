<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午6:14
 */

//trim() 函数移除字符串两侧的空白字符或其他预定义字符。
$str = "Hello World!";
echo $str . "<br>";     //Hello World!
echo trim($str, "Hed!");    //llo Worl
?>