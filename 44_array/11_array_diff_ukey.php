<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午3:54
 */

function myfunction($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "blue", "b" => "black", "e" => "blue");

//array_diff_ukey() 函数用于比较两个（或更多个）数组的键名 ，并返回差集。
//注释：该函数使用用户自定义函数比较键名！
//该函数比较两个（或更多个）数组的键名，并返回一个差集数组，该数组包括了所有在被比较的数组（array1）中，
//但是不在任何其他参数数组（array2 或 array3 等等）中的键名。
$result = array_diff_ukey($a1, $a2, "myfunction");
print_r($result);   //Array ( [c] => blue )

?>