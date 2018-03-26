<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 2018/3/20
 * Time: 下午4:29
 */

$arr = (object)array();
$arr->a = 10;
$arr->b = 20;
$arr->c = 30;
var_dump($arr);
echo '<hr>';

$tempVal = $arr->a;
var_dump($tempVal);
echo '<br>';
const m_b = "b";
$tempVal = $arr->{m_b};
var_dump($tempVal);
?>