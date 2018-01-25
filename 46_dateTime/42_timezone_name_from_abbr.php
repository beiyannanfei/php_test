<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:42
 */
//timezone_name_from_abbr() 根据时区缩略语返回时区名称。
echo timezone_name_from_abbr("EST") . "<br>";
echo timezone_name_from_abbr("", 7200, 0);
?>