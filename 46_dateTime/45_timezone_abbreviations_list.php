<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:48
 */
//timezone_abbreviations_list() 返回包含夏令时、偏移量和时区名称的关联数组。
$tzlist = timezone_abbreviations_list();
echo "<pre>";
print_r($tzlist["act"]);
/*
Array
(
    [0] => Array
        (
            [dst] =>
            [offset] => -18000
            [timezone_id] => America/Porto_Acre
        )

    [1] => Array
        (
            [dst] =>
            [offset] => -18000
            [timezone_id] => America/Eirunepe
        )

    [2] => Array
        (
            [dst] =>
            [offset] => -18000
            [timezone_id] => America/Rio_Branco
        )

    [3] => Array
        (
            [dst] =>
            [offset] => -18000
            [timezone_id] => Brazil/Acre
        )

)
*/
?>