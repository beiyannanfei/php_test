<?php

$str = "111_100,201_100";

$arr = array_map(function ($item) {
    return explode("_", $item);
}, explode(",", $str));

var_dump($arr);

print '<hr>';

foreach ($arr as $item) {
    $templateId = $item[0];
    $itemCount = $item[1];
    echo $templateId;
    echo $itemCount;
    print '<br>';
}