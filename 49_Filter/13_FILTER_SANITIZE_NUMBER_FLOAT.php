<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:33
 */

//FILTER_SANITIZE_NUMBER_FLOAT 过滤器删除浮点数中所有非法的字符。该过滤器默认允许所有数字以及 + -
//FILTER_FLAG_ALLOW_FRACTION - 允许小数分隔符 （比如 .）
//FILTER_FLAG_ALLOW_THOUSAND - 允许千位分隔符（比如 ,）
//FILTER_FLAG_ALLOW_SCIENTIFIC - 允许科学记数法（比如 e 和 E）

$number = "5-2f+3.3pp";

var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
?>