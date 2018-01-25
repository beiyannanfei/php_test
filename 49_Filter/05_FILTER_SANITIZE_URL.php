<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:05
 */

$var = "http://www.w3cschooåøl.cøc";

$res = filter_var($var, FILTER_SANITIZE_URL);
var_dump($res);
echo "<br>";
echo $res;
?>