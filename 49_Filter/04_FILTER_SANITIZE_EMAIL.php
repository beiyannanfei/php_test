<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:03
 */

$var = "some(one)@exa\mple.com";

echo(filter_var($var, FILTER_SANITIZE_EMAIL));  //someone@example.com
?>