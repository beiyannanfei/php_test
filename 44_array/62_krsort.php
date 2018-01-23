<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:21
 */

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
//krsort() 函数对关联数组按照键名进行降序排序。
krsort($age);
print_r($age);  //Array ( [Peter] => 35 [Joe] => 43 [Ben] => 37 )
?>