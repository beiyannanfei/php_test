<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:35
 */

echo "<pre>";
print_r(date_parse_from_format("mmddyyyy", "05122013"));
echo "</pre>";

/*
Array
(
    [year] =>
    [month] => 12
    [day] => 13
    [hour] =>
    [minute] =>
    [second] =>
    [fraction] =>
    [warning_count] => 0
    [warnings] => Array
        (
        )

    [error_count] => 1
    [errors] => Array
        (
            [8] => Data missing
        )

    [is_localtime] =>
)

 */

?>