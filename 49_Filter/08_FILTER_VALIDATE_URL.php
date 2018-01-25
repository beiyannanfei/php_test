<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:19
 */

$url = "sdf";
$res = filter_var($url, FILTER_VALIDATE_URL);
var_dump($res);
if (!$res) {
    echo "URL is not valid";
} else {
    echo "URL is valid";
}
?>