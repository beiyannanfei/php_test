<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午2:42
 * 数组排序
 */
function showArr($arr)
{
    foreach ($arr as $key => $value) {
        echo $key . " = " . $value . "; ";
    }
    echo "<hr>";
}

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);    //sort() - 对数组进行升序排列
showArr($cars);
rsort($cars);      //rsort() - 对数组进行降序排列
showArr($cars);

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
//asort() - 根据关联数组的值，对数组进行升序排列
asort($age);
showArr($age);
//arsort() - 根据关联数组的值，对数组进行降序排列
arsort($age);
showArr($age);
//ksort() - 根据关联数组的键，对数组进行升序排列
ksort($age);
showArr($age);
//krsort() - 根据关联数组的键，对数组进行降序排列
krsort($age);
showArr($age);






