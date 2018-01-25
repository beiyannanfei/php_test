<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:54
 */

//readdir() 函数返回目录中下一个文件的文件名。
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