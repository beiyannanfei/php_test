<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:37
 */
//FILTER_SANITIZE_NUMBER_INT 过滤器删除数字中所有非法的字符。
$number = "5-2+3pp";

var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));
?>