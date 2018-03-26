<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 2018/3/14
 * Time: 上午11:50
 */
//返回当前 Unix 时间戳的微秒数

$timestamp = microtime();
var_dump($timestamp);   //string(21) "0.87977600 1520999604"
echo "<br>";
//当设置为 TRUE 时，规定函数应该返回浮点数，否则返回字符串。默认为 FALSE
$timestamp = microtime(true);
var_dump($timestamp); //float(1520999604.8798)
var_dump(intval($timestamp));

?>