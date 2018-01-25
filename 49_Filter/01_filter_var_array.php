<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:52
 */

//filter_var_array() 函数获取多个变量，并进行过滤。
//该函数对过滤多个值很有用，无需重复调用 filter_var()。
//如果成功，则以数组形式返回请求变量的值。如果失败，则返回 FALSE。

$arr = array
(
    "name" => "peter griffin",
    "age" => "41",
    "email" => "peter@example.com",
);

$filters = array
(
    "name" => array
    (
        "filter" => FILTER_CALLBACK,
        "flags" => FILTER_FORCE_ARRAY,
        "options" => "ucwords"
    ),
    "age" => array
    (
        "filter" => FILTER_VALIDATE_INT,
        "options" => array
        (
            "min_range" => 1,
            "max_range" => 120
        )
    ),
    "email" => FILTER_VALIDATE_EMAIL,
);

echo "<pre>";
print_r(filter_var_array($arr, $filters));
echo "</pre>";
/*
Array
(
    [name] => Peter Griffin
    [age] => 41
    [email] => peter@example.com
)
*/
?>