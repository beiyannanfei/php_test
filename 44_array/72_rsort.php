<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:37
 */

$cars = array("Volvo", "BMW", "Toyota");
//rsort() 函数对数值数组进行降序排序。
rsort($cars);
print_r($cars); //Array ( [0] => Volvo [1] => Toyota [2] => BMW )
?>