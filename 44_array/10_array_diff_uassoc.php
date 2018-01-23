<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午2:49
 */

function myfunction($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("d" => "red", "b" => "green", "e" => "blue");

$result = array_diff_uassoc($a1, $a2, "myfunction");
print_r($result);   //Array ( [a] => red [c] => blue )

?>