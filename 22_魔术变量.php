<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午3:11
 */

namespace MyProject;
echo '命名空间为："', __NAMESPACE__, '"';
echo "<hr>";

echo '这是第 " ' . __LINE__ . ' " 行<hr>';

echo '该文件位于 " ' . __FILE__ . ' " <hr>';

echo '该文件位于 " ' . __DIR__ . ' " <hr>';

function test()
{
    echo '函数名为：' . __FUNCTION__;
}

test();
echo "<hr>";

class test
{
    function _print()
    {
        echo '类名为：' . __CLASS__ . "<br>";
        echo '函数名为：' . __FUNCTION__;
    }
}

$t = new test();
$t->_print();
echo "<hr>";


class Base
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo 'World!';
    }

    public function sayBye()
    {
        echo "trait say bye";
    }
}

class MyHelloWorld extends Base
{
    use SayWorld;

    public function sayBye()
    {
        echo "sub say bye";
    }
}

$o = new MyHelloWorld();
$o->sayHello();
echo "<br>";
$o->sayBye();
echo "<hr>";

function test1()
{
    echo '函数名为：' . __METHOD__;
}

test1();
echo "<hr>";




