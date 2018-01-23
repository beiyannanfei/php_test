<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午4:40
 */

function myfunction($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "black", "b" => "yellow", "d" => "brown");
$a3 = array("e" => "purple", "f" => "white", "a" => "gold");

$result = array_intersect_ukey($a1, $a2, $a3, "myfunction");
print_r($result);

?>