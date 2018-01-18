<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午2:50
 * 超级全局变量
 */
$x = 75;
$y = 25;
function addition()
{
//addition$GLOBALS 是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问。
//$GLOBALS 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键。
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z . "<hr>";

//$_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。
//这个数组中的项目由 Web 服务器创建。不能保证每个服务器都提供全部项目；服务器可能会忽略一些，
//或者提供一些没有在这里列举出来的项目。
foreach ($_SERVER as $key => $value) {
    echo $key . " = " . $value . "<br>";
}
echo "<hr>";







