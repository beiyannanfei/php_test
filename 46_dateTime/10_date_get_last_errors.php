<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/24
 * Time: 下午6:20
 */

date_create("gyuiyiuyui%&&/");
echo "<pre>";
print_r(date_get_last_errors());
echo "</pre>";
/*
Array
(
    [warning_count] => 1
    [warnings] => Array
        (
            [6] => Double timezone specification
        )

    [error_count] => 5
    [errors] => Array
        (
            [0] => The timezone could not be found in the database
            [10] => Unexpected character
            [11] => Unexpected character
            [12] => Unexpected character
            [13] => Unexpected character
        )

)
*/
?>