<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:43
 */
//timezone_location_get() 返回指定时区的位置信息。
$tz = timezone_open("Asia/Taipei");
print_r(timezone_location_get($tz));    //Array ( [country_code] => TW [latitude] => 25.05 [longitude] => 121.5 [comments] => )
?>