<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:59
 */

//closedir() 函数关闭目录句柄。
$dir = "/images/";

// Open a directory, and read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "filename:" . $file . "<br>";
        }
        closedir($dh);
    }
}
?>