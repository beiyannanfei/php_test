<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午10:31
 */

echo "<pre>";
$data = "PHP";
print_r(unpack("C*", $data));
echo "</pre>";
/*
 Array
(
    [1] => 80
    [2] => 72
    [3] => 80
)
*/
?>