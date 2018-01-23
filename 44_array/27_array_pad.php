<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午4:51
 */

$a = array("red", "green");
//array_pad() 函数将指定数量的带有指定值的元素插入到数组中。
//提示：如果您将 size 参数设置为负数，该函数会在原始数组之前插入新的元素（参见下面的实例）。
//注释：如果 size 参数小于原始数组的长度，该函数不会删除任何元素。
print_r(array_pad($a, 5, "blue"));  //Array ( [0] => red [1] => green [2] => blue [3] => blue [4] => blue )

?>