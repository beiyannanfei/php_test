<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/17
 * Time: 下午4:38
 */
define("GREETING", "欢迎访问 Runoob.com", true);
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo '<br>';
echo greeting;   // 输出 "greeting"   //第三个参数如果为true则变量名大小写不敏感，默认false
echo "<hr>";

function myTest()
{
    echo GREETING;  //常量是全局的
}

myTest();