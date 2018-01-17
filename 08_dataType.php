<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/17
 * Time: 下午3:47
 */
//String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）
$x = "Hello world!";
echo $x;
echo "<hr>";

$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
echo "<hr>";

$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
echo "<hr>";

$x = true;
var_dump($x);
echo "<hr>";

$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<hr>";

$x=null;
var_dump($x);
echo "<hr>";
