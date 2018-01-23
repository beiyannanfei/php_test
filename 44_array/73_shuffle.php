<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:38
 */

$my_array = array("red", "green", "blue", "yellow", "purple");
//shuffle() 函数把数组中的元素按随机顺序重新排列。
shuffle($my_array);
print_r($my_array); //Array ( [0] => red [1] => green [2] => blue [3] => purple [4] => yellow )

?>