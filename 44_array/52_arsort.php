<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:03
 */

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
//arsort() 函数对关联数组按照键值进行降序排序。
arsort($age);
print_r($age);  //Array ( [Joe] => 43 [Ben] => 37 [Peter] => 35 )

?>