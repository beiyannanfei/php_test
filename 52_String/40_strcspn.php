<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午5:37
 */

//strcspn() 函数返回在找到任何指定的字符之前，在字符串查找的字符数（包括空格）
echo strcspn("Hello world!", "w") . "<br>";  //6

echo strcspn("Hello world!", "a");  //12
?>