<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午2:45
 */

//number_format() 函数通过千位分组来格式化数字。
//注释：该函数支持一个、两个或四个参数（不是三个）
echo number_format("1000000") . "<br>";             //1,000,000
echo number_format("1000000", 2) . "<br>";  //1,000,000.00
echo number_format("1000000", 2, ",", "."); //1.000.000,00
?>