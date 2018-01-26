<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午4:50
 */

$str = "Hello World";
//str_pad() 函数把字符串填充为新的长度。
echo str_pad($str, 20, ".") . "<br>";    //Hello World.........

$str = "Hello World";
echo str_pad($str, 20, ".", STR_PAD_LEFT) . "<br>"; //.........Hello World

$str = "Hello World";
echo str_pad($str, 20, ".:", STR_PAD_BOTH); //.:.:Hello World.:.:.
?>