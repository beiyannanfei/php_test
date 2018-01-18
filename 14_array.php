<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午2:32
 */
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "." . "<br>";
echo "arr len: " . count($cars) . "<br>";  //获取数组长度
echo "<hr>";
//遍历数组
for ($x = 0; $x < count($cars); ++$x) {
    echo $x . " is " . $cars[$x] . "<br>";
}
echo "<hr>";

//关联数组是使用您分配给数组的指定的键的数组。
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");  //创建方式一
$age["henly"] = "29";   //创建方式二
$age["lyuyis"] = "31";   //创建方式二
foreach ($age as $x => $x_value) {  //遍历关联数组
    echo "Key = " . $x . ", value = " . $x_value . "<br>";
}
echo "<hr>";


