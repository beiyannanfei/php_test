<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:32
 */

//range() 函数创建一个包含指定范围的元素的数组
$number = range(0, 5);
print_r($number);   //Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )
echo "<br>";

$letter = range("a", "d");
print_r($letter);   //Array ( [0] => a [1] => b [2] => c [3] => d )
?>