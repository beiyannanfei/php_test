<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 上午11:28
 */
$sites = array
(
    "runoob" => array
    (
        "菜鸟教程",
        "http://www.runoob.com"
    ),
    "google" => array
    (
        "Google 搜索",
        "http://www.google.com"
    ),
    "taobao" => array
    (
        "淘宝",
        "http://www.taobao.com"
    )
);
print("<pre>"); // 格式化输出数组
print_r($sites);
print("</pre>");
echo "<hr>";
echo $sites['runoob'][0] . '地址为：' . $sites['runoob'][1];
?>