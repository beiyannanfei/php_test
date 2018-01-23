<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:04
 */

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
//asort() 函数对关联数组按照键值进行降序排序。
asort($age);
print_r($age);  //Array ( [Peter] => 35 [Ben] => 37 [Joe] => 43 )

?>