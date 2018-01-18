<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午5:09
 * 访问控制
 * PHP 对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。
 * public（公有）：公有的类成员可以在任何地方被访问。
 * protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
 * private（私有）：私有的类成员则只能被其定义所在的类访问。
 */

//属性的访问控制
//类属性必须定义为公有，受保护，私有之一。如果用 var 定义，则被视为公有。
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public . "<br>"; // 这行能被正常执行
//echo $obj->protected . "<br>"; // 这行会产生一个致命错误
//echo $obj->private; // 这行也会产生一个致命错误
$obj->printHello() . "<br>"; // 输出 Public、Protected 和 Private
echo "<hr>";

class MyClass2 extends MyClass
{
    // 可以对 public 和 protected 进行重定义，但 private 而不能
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
//        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public . "<br>"; // 这行能被正常执行
//echo $obj2->private; // 未定义 private
//echo $obj2->protected; // 这行会产生一个致命错误
$obj2->printHello(); // 输出 Public、Protected2











