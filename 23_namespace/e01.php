<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午4:07
 * 注意访问任意全局类、函数或常量，都可以使用完全限定名称，例如 \strlen() 或 \Exception 或 \INI_ALL。
 */

namespace Foo;

function strlen()
{
    return "e01 function strlen<br>";
}

echo strlen();  //out: e01 function strlen
echo \strlen("hello") . "<br>";  //out: 5    调用全局函数strlen

$c = new \Exception('error'); // 实例化全局类 Exception
echo $c;