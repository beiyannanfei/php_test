<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午6:55
 */

$a = array("A", "Cat", "Dog", "A", "Dog");    //统计数组中所有值出现的次数
print_r(array_count_values($a));    //Array ( [A] => 2 [Cat] => 1 [Dog] => 2 )

?>