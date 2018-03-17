<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 2018/3/17
 * Time: 上午11:15
 */
$a = array("a" => "AAA", "b" => "BBB", "c" => "CCC");
$b = igbinary_serialize($a);
var_dump($b);
echo "<hr>";
$c = igbinary_unserialize($b);
var_dump($c);

echo "<hr>";
$c['d'] = "dddd";
var_dump($c);
echo "<hr>";
var_dump($a);
?>