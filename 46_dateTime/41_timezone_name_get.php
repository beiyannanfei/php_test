<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:42
 */
//timezone_name_get() 返回时区的名称。
$tz = timezone_open("Europe/Paris");
echo timezone_name_get($tz);
?>