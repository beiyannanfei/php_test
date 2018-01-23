<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:12
 */

$people = array("Peter", "Joe", "Glenn", "Cleveland");
//each() 函数返回当前元素的键名和键值，并将内部指针向前移动。
//该元素的键名和键值返回到带有四个元素的数组中。两个元素（1 和 Value）包含键值，两个元素（0 和 Key）包含键名。
//相关的方法：
//current() - 返回数组中的当前元素的值。
//end() - 将内部指针指向数组中的最后一个元素，并输出。
//next() - 将内部指针指向数组中的下一个元素，并输出。
//prev() - 将内部指针指向数组中的上一个元素，并输出。
//reset() - 将内部指针指向数组中的第一个元素，并输出。
print_r(each($people)); //Array ( [1] => Peter [value] => Peter [0] => 0 [key] => 0 )

?>