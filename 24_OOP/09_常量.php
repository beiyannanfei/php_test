<?php

/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午6:16
 * 常量
 * 可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $ 符号。
 * 常量的值必须是一个定值，不能是变量，类属性，数学运算的结果或函数调用。
 * 自 PHP 5.3.0 起，可以用一个变量来动态调用类。但该变量的值不能为关键字（如 self，parent 或 static）
 */
class MyClass
{
    const constant = '常量值';

    function showConstant()
    {
        echo self::constant . "<hr>";   //可以用 $this::constant or MyClass::constant,但是不可以使用$this->constant
    }
}

echo MyClass::constant . "<hr>";

$classname = "MyClass";
echo $classname::constant . "<hr>"; // 自 5.3.0 起

$class = new MyClass();
$class->showConstant();

echo $class::constant . "<hr>"; // 自 PHP 5.3.0 起






