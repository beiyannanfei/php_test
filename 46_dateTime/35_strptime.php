<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:38
 */
//strptime() 函数解析由 strftime() 生成的时间/日期。
$format = "%d/%m/%Y %H:%M:%S";
$strf = strftime($format);
echo("$strf");
print_r(strptime($strf, $format));
?>