<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:31
 */

//FILTER_VALIDATE_INT 过滤器把值作为整数来验证。

//min_range - 规定最小整数值
//max_range - 规定最大整数值
//FILTER_FLAG_ALLOW_OCTAL - 允许八进制数值
//FILTER_FLAG_ALLOW_HEX - 允许十六进制数值


$var = 300;

$int_options = array("options" => array("min_range" => 0, "max_range" => 256));

var_dump(filter_var($var, FILTER_VALIDATE_INT, $int_options));  //false

?>