<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午6:03
 */

echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();
print_r($browser);

?>