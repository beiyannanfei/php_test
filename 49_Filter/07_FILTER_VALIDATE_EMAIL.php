<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:16
 */

$email = "someone@exa mple.com";
$res = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($res);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail is not valid";
} else {
    echo "E-mail is valid";
}
?>