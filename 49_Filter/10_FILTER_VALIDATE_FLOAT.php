<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:27
 */

$var=12.3;
var_dump(filter_var($var, FILTER_VALIDATE_FLOAT));
$var="qwfc1asdf2asfw.asdf3asdf";
var_dump(filter_var($var, FILTER_VALIDATE_FLOAT));
?>