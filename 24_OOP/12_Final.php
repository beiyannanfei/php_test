<?php

/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午6:44
 * Final 关键字
 * PHP 5 新增了一个 final 关键字。如果父类中的方法被声明为 final，则子类无法覆盖该方法。
 * 如果一个类被声明为 final，则不能被继承。
 * 以下代码执行会报错：
 */
class BaseClass
{
    public function test()
    {
        echo "BaseClass::test() called" . PHP_EOL;
    }

    final public function moreTesting()
    {
        echo "BaseClass::moreTesting() called" . PHP_EOL;
    }
}

class ChildClass extends BaseClass
{
    public function moreTesting()
    {
        echo "ChildClass::moreTesting() called" . PHP_EOL;
    }
}






