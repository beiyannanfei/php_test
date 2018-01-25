<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:51
 */
//scandir() 函数返回指定目录中的文件和目录的数组。
echo "<pre>";
$dir = "./";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir, 1);

print_r($a);
print_r($b);

?>