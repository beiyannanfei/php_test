<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:46
 */
//base_convert() 函数在任意进制之间转换数字。
$hex = "E196";
echo base_convert($hex, 16, 8) . "<hr>";    //out: 160626

//bindec() 函数把二进制数转换为十进制数。
echo bindec("0011") . "<hr>";   //out: 3

//decbin() 函数把十进制数转换为二进制数。
echo decbin("3") . "<hr>";  //out: 11

//dechex() 函数把十进制数转换为十六进制数。
echo dechex("30") . "<hr>"; //out: 1e

//decoct() 函数把十进制数转换为八进制数。
echo decoct("10") . "<hr>"; //out: 12

//ceil() 函数向上舍入为最接近的整数。
echo(ceil(5.1) . "<hr>");   //out: 6

//floor() 函数向下舍入为最接近的整数。
echo(floor(5.1) . "<hr>");  //out: 5

//The fmod() 函数返回 x/y 的浮点数余数。
$x = 7;
$y = 2;
$result = fmod($x, $y);
echo $result . "<hr>";  //out: 1

//The getrandmax() 函数返回通过调用 rand() 函数显示的随机数的最大可能值。
echo (getrandmax()) . "<hr>";   //2147483647

//hexdec() 函数把十六进制数转换为十进制数。
echo hexdec("11ff") . "<hr>";

//is_finite() 函数判断一个值是否为有限值。
//如果指定的值是有限值，该函数返回 true (1)。否则，它将返回 false/nothing。
//如果值是本机平台上 PHP 浮点数所允许范围内，则该值是有限值。
var_dump(is_finite(2));
var_dump(is_finite(log(0)));
var_dump(is_finite(2000));
echo "<hr>";

//is_infinite() 函数判断一个值是否为无限值。
//如果指定的值是有限值，该函数返回 TRUE (1)。否则，它将返回 FALSE(没有任何输出)。
//如果值是本机平台上 PHP 浮点数所允许范围内，则该值是无限值。
var_dump(is_infinite(2));
var_dump(is_infinite(log(0)));
var_dump(is_infinite(2000));
echo "<hr>";

//is_nan() 函数判断一个值是否为非数值。如果指定的值是非数值，该函数返回 true (1)。否则，它将返回 false/nothing。
var_dump(is_nan(200));
var_dump(is_nan(acos(1.01)));
echo "<hr>";

//lcg_value() 函数返回范围为 (0, 1) 的一个伪随机数。
echo lcg_value() . "<hr>";

//max() 函数返回一个数组中的最大值，或者几个指定值中的最大值。
echo(max(22, 14, 68, 18, 15) . "<br>");
echo(max(array(4, 6, 8, 10)) . "<hr>");

//min() 函数返回一个数组中的最小值，或者几个指定值中的最小值。
echo(min(22, 14, 68, 18, 15) . "<br>");
echo(min(array(4, 6, 8, 10)) . "<hr>");

//mt_getrandmax() 函数返回通过调用 mt_rand() 函数显示的随机数的最大可能值。
echo (mt_getrandmax()) . "<hr>";    //out:2147483647

//mt_rand() 函数使用 Mersenne Twister 算法生成随机整数。该函数是产生随机值的更好选择，返回结果的速度是 rand() 函数的 4 倍
echo(mt_rand() . "<br>");
echo(mt_rand() . "<br>");
echo (mt_rand(10, 100)) . "<hr>";

//octdec() 函数把八进制数转换为十进制数。
echo octdec("12") . "<hr>";

//rand() 函数生成随机整数。
echo(rand() . "<br>");
echo(rand() . "<br>");
echo (rand(10, 100)) . "<hr>";

echo(abs(6.7) . "<hr>");    //取绝对值

srand(time());  //srand() 函数播种随机数生成器
echo (rand()) . "<hr>";

//round() 函数对浮点数进行四舍五入。
echo(round(0.60) . "<br>"); //1
echo(round(0.49) . "<hr>"); //0
?>