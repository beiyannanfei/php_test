<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:53
 */

//rewinddir() 函数重置由 opendir() 创建的目录句柄。
$dir = "./";

// Open a directory, and read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
// List files in images directory
        while (($file = readdir($dh)) !== false) {
            echo "filename: " . $file . "<br>";
        }
        rewinddir();
// List once again files in images directory
        while (($file = readdir($dh)) !== false) {
            echo "filename: " . $file . "<br>";
        }
        closedir($dh);
    }
}
?>