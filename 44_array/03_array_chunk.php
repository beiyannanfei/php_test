<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午6:35
 */

print("<pre>");
$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel");
print_r(array_chunk($cars, 2));     //把数组分割为带有两个元素的数组块：

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43", "Harry" => "50");
print_r(array_chunk($age, 2, true));    //把数组分割为带有两个元素的数组块，并保留原始数组中的键名
print ("</pre>");
?>