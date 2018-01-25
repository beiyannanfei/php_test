<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:38
 */

echo "<pre>";
print_r(date_parse("2013-05-01 12:30:45.5"));
echo "</pre>";

/*
Array
(
    [year] => 2013
    [month] => 5
    [day] => 1
    [hour] => 12
    [minute] => 30
    [second] => 45
    [fraction] => 0.5
    [warning_count] => 0
    [warnings] => Array
        (
        )

    [error_count] => 0
    [errors] => Array
        (
        )

    [is_localtime] =>
)
*/

?>