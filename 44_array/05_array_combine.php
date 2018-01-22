<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午6:50
 */

$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");

$c = array_combine($fname, $age);   //通过合并两个数组来创建一个新数组，其中的一个数组元素为键名，另一个数组元素为键值
print_r($c);    //Array ( [Peter] => 35 [Ben] => 37 [Joe] => 43 )

?>