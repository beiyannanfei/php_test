<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午4:43
 */

function myfunction($v)
{
    return ($v * $v);
}

$a = array(1, 2, 3, 4, 5);
//array_map() 函数将用户自定义函数作用到数组中的每个值上，并返回用户自定义函数作用后的带有新的值的数组。
//提示：您可以向函数输入一个或者多个数组。
print_r(array_map("myfunction", $a));   //Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

?>