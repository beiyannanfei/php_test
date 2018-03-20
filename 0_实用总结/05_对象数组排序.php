<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 2018/3/19
 * Time: 下午8:41
 */
$cars = array("a", "b", "c", "d", "e");

foreach ($cars as $item) {
    if ('c' == $item) {
        continue;
    }
    echo $item . "<br>";
}
echo "<hr>";

$arr = array();
$arr["aa"] = "AAA";
$arr["bb"] = "BBB";
$arr["cc"] = "CCC";
var_dump($arr);

echo "<hr>";

var_dump(explode(",", "a")[0]);

echo "<hr>";

$resultArr = array();
$temp1 = array("id" => 1, "readCount" => 20, "name" => "aa");
$temp2 = array("id" => 2, "readCount" => 25, "name" => "bb");
$temp3 = array("id" => 3, "readCount" => 18, "name" => "cc");
$temp4 = array("id" => 4, "readCount" => 2, "name" => "dd");
$temp5 = array("id" => 5, "readCount" => 22, "name" => "ee");
$temp6 = array("id" => 6, "readCount" => 24, "name" => "ff");
$temp7 = array("id" => 7, "readCount" => 18, "name" => "gg");
$temp8 = array("id" => 8, "readCount" => 20, "name" => "hh");
array_push($resultArr, $temp1);
array_push($resultArr, $temp2);
array_push($resultArr, $temp3);
array_push($resultArr, $temp4);
array_push($resultArr, $temp5);
array_push($resultArr, $temp6);
array_push($resultArr, $temp7);
array_push($resultArr, $temp8);

print("<pre>"); // 格式化输出数组
print_r($resultArr);
echo "<hr>";

foreach ($resultArr as $key => $value) {
    $readCount[$key] = $value['readCount'];
    $userId[$key] = $value['id'];
}
print_r($readCount);
print_r($id);

array_multisort($readCount, SORT_NUMERIC, SORT_DESC, $userId, SORT_NUMERIC, SORT_ASC, $resultArr);
echo "<hr>";

print_r($resultArr);

print("</pre>");
/*
$array[] = array("age" => 20, "name" => "li", "tag" => "aa");
$array[] = array("age" => 21, "name" => "ai", "tag" => "bb");
$array[] = array("age" => 20, "name" => "ci", "tag" => "cc");
$array[] = array("age" => 22, "name" => "di", "tag" => "dd");

foreach ($array as $key => $value) {
    $age[$key] = $value['age'];
    $name[$key] = $value['name'];
}
print_r($age);
echo "<br>";
print_r($name);
echo "<br>";
//文档地址
array_multisort($age, SORT_NUMERIC, SORT_DESC, $name, SORT_STRING, SORT_ASC, $array);
print_r($array);*/

?>