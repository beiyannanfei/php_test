<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午10:59
 */

//bin2hex() 函数把 ASCII 字符的字符串转换为十六进制值。字符串可通过使用 pack() 函数再转换回去。
$str = bin2hex("Hello World!");
echo($str); //48656c6c6f20576f726c6421

?>