<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:42
 */

function my_sort($a, $b)
{
    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
}

$arr = array("a" => 4, "b" => 2, "c" => 8, "d" => "6");
//uksort() 函数使用用户自定义的比较函数对数组按键名进行排序。
//提示：请使用 uasort() 函数对数组按键值进行排序，该函数使用用户自定义的比较函数进行排序。
uksort($arr, "my_sort");
print_r($arr);  //Array ( [a] => 4 [b] => 2 [c] => 8 [d] => 6 )

?>