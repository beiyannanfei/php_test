<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/2/1
 * Time: 下午3:00
 * php常用函数
 */
$timeStamp = microtime(true);   //获取时间戳
var_dump($timeStamp);   //float(1517468641.5426)
echo "<br>";

$pos = strpos("hello world", 'w');  //获取字符位置
$pos1 = strpos("hello world", 'w1');  //获取字符位置,找不到返回false
var_dump($pos, $pos1);
echo "<br>";

//查找 "world" 在 "Hello world!" 中的第一次出现，并返回字符串的剩余部分,找不到返回false
var_dump(strstr("Hello world!", "*l"));   //false
echo "<br>";

//分隔字符串为数组，相当于split
var_dump(explode(",", "a,b,c,d,e,f"));
echo "<br>";

//将数组拼接为字符串，相当于join
$arr = array("a", "b", "c", "d", "e", "tt" => "TT");
echo(implode(",", $arr));
echo "<br>";

//判断是否存在
var_dump(isset($arr["tt"]));
var_dump(isset($arr["tt1"]));
echo "<br>";

//字符串替换
var_dump(str_replace("world", "Peter", "Hello world!"));
echo "<br>";

//获取日期
date_default_timezone_set("Asia/Shanghai");
var_dump(date("Y-m-d H:i:s"));  //"2018-02-01 16:51:39"
echo "<br>";

//将变量值赋值给一个变量可直接输出(不加第二个参数相当于var_dump)
$var = var_export(array('a', 'b', array('aa', 'bb', 'cc')), TRUE);
echo $var;
echo "<br>";

//判断是不是字符串，类似操作还有is_null，is_array is_object is_numeric等
var_dump(is_string("abc"));
var_dump(is_string(123));
echo "<br>";

var_dump(memory_get_usage());   //获取内存
echo "<br>";

var_dump(in_array("TT", $arr)); //判断数组中是否存在查找值，返回bool值
echo "<br>";

include "./52_String/58_substr.php";    //截取字符串
echo "<br>";

include "./52_String/60_substr_count.php";  //统计字符串出现次数
echo "<br>";

print_r(pathinfo("http://www.w3school.com.cn/php/abc.asp"));    //解析
echo "<br>";

var_dump(strval(123));  //number 2 string
echo "<br>";

var_dump(intval("123"));    //string 2 number
echo "<br>";

include "./44_array/36_array_search.php";   //查找数组中某个值得索引
?>