<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:41
 */

//timezone_open() 创建一个新的 DateTimeZone 对象。
$tz = timezone_open("Europe/Paris");
echo timezone_name_get($tz);
?>