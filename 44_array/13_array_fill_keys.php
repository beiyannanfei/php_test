<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午4:20
 */


$keys = array("a", "b", "c", "d");
//array_fill_keys() 函数用给定的指定键名的键值填充数组。
$a1 = array_fill_keys($keys, "blue");
print_r($a1);   //Array ( [a] => blue [b] => blue [c] => blue [d] => blue )

?>