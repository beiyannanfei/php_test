<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午4:41
 */

$a = array("Volvo" => "XC90", "BMW" => "X5");
//array_key_exists() 函数检查某个数组中是否存在指定的键名，如果键名存在则返回 true，如果键名不存在则返回 false。
//提示：请记住，如果您指定数组的时候省略了键名，将会生成从 0 开始并以 1 递增的整数键名。（参阅实例 2）
if (array_key_exists("Volvo", $a)) {
    echo "Key exists!"; //Key exists!
} else {
    echo "Key does not exist!";
}

?>