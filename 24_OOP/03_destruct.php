<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午5:01
 * 析构函数
 */

class MyDestructableClass
{
    function __construct()
    {
        print "构造函数\n";
        $this->name = "MyDestructableClass";
    }

    function __destruct()
    {
        print "销毁 " . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();