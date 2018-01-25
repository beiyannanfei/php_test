<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:29
 */
//FILTER_VALIDATE_BOOLEAN 过滤器把值作为布尔选项来验证。
//如果是 "1"、"true"、"on" 和 "yes"，则返回 TRUE。
//如果是 "0"、"false"、"off" 和 "no"，则返回 FALSE。
//否则返回 NULL。
$var = "yes";
var_dump(filter_var($var, FILTER_VALIDATE_BOOLEAN));    //true
$var = "abcefd";
var_dump(filter_var($var, FILTER_VALIDATE_BOOLEAN));    //false
?>