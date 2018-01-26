<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午11:34
 */
//explode() 函数使用一个字符串分割另一个字符串，并返回由字符串组成的数组。
//注释："separator" 参数不能是一个空字符串。
//注释：该函数是二进制安全的。

$str = 'one,two,three,four';

//  返回包含一个元素的数组
print_r(explode(',', $str, 0)); //Array ( [0] => one,two,three,four )
print "<br>";

// 数组元素为 2
print_r(explode(',', $str, 2)); //Array ( [0] => one [1] => two,three,four )
print "<br>";

// 删除最后一个数组元素
print_r(explode(',', $str, -1));    //Array ( [0] => one [1] => two [2] => three )

?>