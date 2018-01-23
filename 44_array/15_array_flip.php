<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午4:27
 */

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
//array_flip() 函数用于反转 / 交换数组中的键名和对应关联的键值。
$result = array_flip($a1);
print_r($result);   //Array ( [red] => a [green] => b [blue] => c [yellow] => d )

?>