<?php

/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午4:11
 * PHP 命名空间的实现受到其语言自身的动态特征的影响。因此，如果要将下面的代码转换到命名空间中，动态访问元
 */
class classname
{
    function __construct()
    {
        echo "classname: " . __METHOD__ . "<br>";
    }
}

function funcname()
{
    echo "funcname " . __FUNCTION__ . "<br>";
}
const constname = "global";

$a = 'classname';
$obj = new $a; // prints classname::__construct
$b = 'funcname';
$b(); // prints funcname
echo constant('constname'), "\n"; // prints global