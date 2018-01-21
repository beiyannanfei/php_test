<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/21
 * Time: 下午2:51
 * 调用父类构造方法
 * PHP 不会在子类的构造方法中自动的调用父类的构造方法。
 * 要执行父类的构造方法，需要在子类的构造方法中调用 parent::__construct() 。
 */

class BaseClass
{
    function __construct()
    {
        echo "base __construct<br>";
    }
}

class SubClass extends BaseClass
{
    function __construct()
    {
        parent::__construct();  //如果子类定义了构造函数需要显示调用父类的构造函数，否则报错
        echo "SubClass __construct<br>";
    }
}

class OtherSubClass extends BaseClass
{
    //如果子类没有定义构造函数，则直接继承父类的构造函数
}

$obj = new BaseClass(); //out: base __construct
echo "<hr>";
$obj = new SubClass();  //out: base __construct SubClass __construct
echo "<hr>";
$obj = new OtherSubClass(); //out: base __construct