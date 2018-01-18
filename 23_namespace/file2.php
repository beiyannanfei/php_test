<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午3:53
 */

namespace Foo\Bar;
include "./file1.php";

const FOO = 2;
function foo()
{
    echo "file2 function foo<br>";
}

class foo
{
    static function statismethod()
    {
        echo "file2 class foo statismethod<br>";
    }
}

/* 非限定名称 */
foo();  //解析为 Foo\Bar\foo  => out: file2 function foo
foo::statismethod();    //解析为类 Foo\Bar\foo的静态方法staticmethod out: file2 class foo statismethod
echo FOO . "<hr>";   //out: 2

/* 限定名称 */
subnamespace\foo(); //解析为函数 Foo\Bar\subnamespace\foo    out: file1 function foo
subnamespace\foo::staticmethod();   //解析为类 Foo\Bar\subnamespace\foo 以及类的方法 staticmethod out: file1 class foo staticmethod
echo subnamespace\FOO . "<hr>"; //解析为常量 Foo\Bar\subnamespace\FOO    out: 1

/* 完全限定名称 */
\Foo\Bar\foo(); // 解析为函数 Foo\Bar\foo    out: file2 function foo
\Foo\Bar\foo::statismethod();   // 解析为类 Foo\Bar\foo, 以及类的方法 staticmethod    out: file2 class foo statismethod
echo \Foo\Bar\FOO . "<br>";  //解析为常量 Foo\Bar\FOO     out: 2

\Foo\Bar\subnamespace\foo::staticmethod();  //out: file1 class foo staticmethod
\Foo\Bar\subnamespace\foo();    //out: file1 function foo
echo \Foo\Bar\subnamespace\FOO . "<br>";    //out: 1
