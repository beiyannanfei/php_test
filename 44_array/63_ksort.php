<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:22
 */

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
//ksort() 函数对关联数组按照键名进行升序排序。
ksort($age);
print_r($age);  //Array ( [Ben] => 37 [Joe] => 43 [Peter] => 35 )g
?>