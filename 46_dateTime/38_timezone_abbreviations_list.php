<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:40
 */

//timezone_abbreviations_list() 返回包含夏令时、偏移量和时区名称的关联数组。
$tzlist = timezone_abbreviations_list();
print_r($tzlist["act"]);
?>