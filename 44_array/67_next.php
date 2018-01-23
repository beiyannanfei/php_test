<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:29
 */

$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>"; //Peter
//next() 函数将内部指针指向数组中的下一个元素，并输出。
echo next($people); //Joe

?>