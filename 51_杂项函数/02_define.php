<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午5:47
 */

//define() 函数定义一个常量。常量类似变量，不同之处在于：
//在设定以后，常量的值无法更改
//常量名不需要开头的美元符号（$）
//作用域不影响对常量的访问
//常量值只能是字符串和数字

define("GREETING", "Hello you! How are you today?");
echo GREETING . "<br>";
//定义一个大小写不敏感的常量：
define("GREETING", "Hello you! How are you today?", TRUE);
echo greeting;
?>