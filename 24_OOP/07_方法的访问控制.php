<?php

/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午5:17
 */
class MyClass
{
    // 声明一个公有的构造函数
    public function __construct()
    {
        echo "MyClass __construct<br>";
    }

    // 声明一个公有的方法
    public function MyPublic()
    {
        echo "MyClass MyPublic<br>";
    }

    // 声明一个受保护的方法
    protected function MyProtected()
    {
        echo "MyClass MyProtected<br>";
    }

    // 声明一个私有的方法
    private function MyPrivate()
    {
        echo "MyClass MyPrivate<br>";
    }

    // 此方法为公有
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;
$myclass->MyPublic(); // 这行能被正常执行
//$myclass->MyProtected(); // 这行会产生一个致命错误
//$myclass->MyPrivate(); // 这行会产生一个致命错误
$myclass->Foo(); // 公有，受保护，私有都可以执行
echo "<hr>";


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // 此方法为公有
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
//        $this->MyPrivate(); // 这行会产生一个致命错误
    }
}

$myclass2 = new MyClass2;
$myclass2->MyPublic(); // 这行能被正常执行
$myclass2->Foo2(); // 公有的和受保护的都可执行，但私有的不行
echo "<hr>";

class Bar
{
    public function test()
    {
        $this->testPrivate();
        $this->testPublic();
    }

    public function testPublic()
    {
        echo "Bar::testPublic<br>";
    }

    private function testPrivate()
    {
        echo "Bar::testPrivate<br>";
    }
}

class Foo extends Bar
{
    public function testPublic()
    {
        echo "Foo::testPublic<br>";
    }

    private function testPrivate()
    {
        echo "Foo::testPrivate<br>";
    }
}

$myFoo = new foo();
$myFoo->test();

