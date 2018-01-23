<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:20
 */

$people = array("a" => "Peter", "Joe", "Glenn", "Cleveland");
//key() 函数从当前内部指针位置返回元素键名。如果错误，函数返回 FALSE。
echo "The key from the current position is: " . key($people);   //The key from the current position is: a

?>