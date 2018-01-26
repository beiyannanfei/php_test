<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午3:20
 */

//setlocale() 函数设置地区信息（地域信息）。
//地区信息是针对一个地理区域的语言、货币、时间以及其他信息。
//注释：setlocale() 函数仅针对当前脚本改变地区信息。
//提示：可以通过 setlocale(LC_ALL,NULL) 把地区信息设置为系统默认。
//提示：如需获取数字格式信息，请查看 localeconv() 函数。

echo setlocale(LC_ALL, "US");
echo "<br>";
echo setlocale(LC_ALL, NULL);
?>