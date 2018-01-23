<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:43
 */

function my_sort($a, $b)
{
    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
}

$a = array(4, 2, 8, 6);
//usort() 使用用户自定义的比较函数对数组进行排序。
usort($a, "my_sort");
print_r($a);    //Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 )

?>