<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午6:32
 */

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

$pets = array("a" => "Cat", "B" => "Dog", "c" => "Horse", "b" => "Bird");

print("<pre>"); // 格式化输出数组
print_r(array_change_key_case($age, CASE_UPPER));   //将数组的所有的键转换为大写字母：
print_r(array_change_key_case($age, CASE_LOWER));    //将数组的所有的键转换为小写字母：

//如果运行完 array_change_key_case() 之后有两个或者更多个的键相同（比如 "b" 和 "B"），则最后的元素会覆盖其他元素
print_r(array_change_key_case($pets, CASE_UPPER));
print("</pre>");
?>