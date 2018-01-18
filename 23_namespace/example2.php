<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午4:16
 * 必须使用完全限定名称（包括命名空间前缀的类名称）。注意因为在动态的类名称、函数名称或常量名称中，
 * 限定名称和完全限定名称没有区别，因此其前导的反斜杠是不必要的。
 * 动态访问命名空间的元素
 */

namespace namespacename;
class classname
{
    function __construct()
    {
        echo __METHOD__ . "<br>";
    }
}

function funcname()
{
    echo __FUNCTION__ . "<br>";
}
const constname = "namespaced";

include "./example1.php";
echo "<hr>";

$a = 'classname';
$obj = new $a; // prints classname::__construct
$b = 'funcname';
$b(); // prints funcname
echo constant('constname'); // prints global
echo "<hr>";

//注意：如果用双引号则必须使用："\\namespacename\\classname"
$a = '\namespacename\classname';
$obj = new $a; // prints namespacename\classname::__construct
$a = 'namespacename\classname';
$obj = new $a; // also prints namespacename\classname::__construct
$b = 'namespacename\funcname';
$b(); // prints namespacename\funcname
$b = '\namespacename\funcname';
$b(); // also prints namespacename\funcname
echo constant('\namespacename\constname') . "<br>"; // prints namespaced
echo constant('namespacename\constname') . "<br>"; // also prints namespaced






