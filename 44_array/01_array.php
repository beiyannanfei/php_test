<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午6:28
 */
$cars = array("Volvo", "BMW", "Toyota");
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
$carss = array
(
    array("Volvo", 100, 96),
    array("BMW", 60, 59),
    array("Toyota", 110, 100)
);
print("<pre>"); // 格式化输出数组
print_r($cars);
echo "<br>";
print_r($age);
echo "<br>";
print_r($carss);
print("</pre>");
?>