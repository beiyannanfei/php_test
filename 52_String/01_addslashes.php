<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午10:56
 */

//addslashes() 函数返回在预定义的字符前添加反斜杠的字符串。
//该函数可用于为存储在数据库中的字符串以及数据库查询语句准备合适的字符串。
//预定义字符是：
//单引号（'）
//双引号（"）
//反斜杠（\）
//NULL



$str = addslashes('What does "yolo" mean?');    //What does \"yolo\" mean?
echo ($str) . "<br>";

$str = addslashes("What does 'yolo' mean?");    //What does \'yolo\' mean?
echo ($str) . "<br>";

$str = addslashes("What does \yolo\ mean?");    //What does \\yolo\\ mean?
echo ($str) . "<br>";
?>