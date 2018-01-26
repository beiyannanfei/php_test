<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午12:11
 */

$str = "Hello World!";
echo $str . "<br>";                 //Hello World!
echo ltrim($str, "Hello") . "<hr>";  //World!

$str = "\tHello World!";
echo "Without ltrim: " . $str;
echo "<br>";
echo "With ltrim: " . ltrim($str);
?>