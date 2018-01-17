<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/17
 * Time: 下午2:58
 */

$x = 5; //全局变量

function myTest()
{
    $y = 10;//局部变量
    echo "<p>测试函数内变量<p>";
//    echo "变量 x 为：$x";   //Notice: Undefined variable: x in /opt/lampp/htdocs/mytest/03.php on line 15
    echo "<br>";
    echo "变量 y 为： $y";
}

myTest();

echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
//echo "变量 y 为: $y";//Notice: Undefined variable: y in /opt/lampp/htdocs/mytest/03.php on line 25
?>