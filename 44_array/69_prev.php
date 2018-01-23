<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:30
 */

$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>"; //Peter
echo next($people) . "<br>";    //Joe
//prev() 函数将内部指针指向数组中的上一个元素，并输出。
echo prev($people); //Peter

?>