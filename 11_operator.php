<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/17
 * Time: 下午5:46
 */
$a = 2;
$b = -$a;
echo $b;
echo '<br>';  // 换行
$x = 10;
$y = 6;
echo($x + $y); // 输出16
echo '<br>';  // 换行

echo($x - $y); // 输出4
echo '<br>';  // 换行

echo($x * $y); // 输出60
echo '<br>';  // 换行

echo($x / $y); // 输出1.6666666666667
echo '<br>';  // 换行

echo($x % $y); // 输出4
echo '<br>';  // 换行

echo -$x;
echo '<br>';  // 换行

//var_dump(intdiv(10, 3)); PHP7+ 版本新增整除运算符 intdiv(),使用实例
echo "<hr>";
$a = "Hello";
$b = $a . " world!";
echo $b; // 输出Hello world!
echo '<br>';  // 换行

$x = "Hello";
$x .= " world!";
echo $x; // 输出Hello world!
echo '<br>';  // 换行

$x = 10;
echo ++$x; // 输出11
echo "<br>";
$y = 10;
echo $y++; // 输出10
echo "<br>";
$z = 5;
echo --$z; // 输出4
echo "<br>";
$i = 5;
echo $i--; // 输出5
echo "<hr>";

$x = 100;
$y = "100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a = 50;
$b = 90;
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);

echo "<hr>";
//PHP 数组运算符
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);

var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
echo "<hr>";

$test = '菜鸟教程';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username;
echo "<br>";

// PHP 5.3+ 版本写法
$test1 = "";
$username1 = $test1 ?: 'nobody';
echo $username1;
echo "<hr>";

//在 PHP7+ 版本多了一个 NULL 合并运算符 ??
//$username2 = $test1 ?? 'nobody'; //<=> $username2 = $test1 ? $test1 : 'nobody';





