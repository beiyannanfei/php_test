<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:56
 */

//opendir() 函数打开目录句柄。
$dir = "./";
// Open a directory, and read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "filename: " . $file . "<br>";
        }
        closedir($dh);
    }
}
?>