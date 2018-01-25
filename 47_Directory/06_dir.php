<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:58
 */

//dir() 函数返回 Directory 类的实例。该函数用于读取一个目录，包含如下：
//给定的要打开的目录
//dir() 的 handle 和 path 两个属性是可用的
//handle 和 path 属性有三个方法：read()、rewind() 和 close()
$d = dir(getcwd());

echo "Handle: " . $d->handle . "<br>";
echo "Path: " . $d->path . "<br>";

while (($file = $d->read()) !== false) {
    echo "filename: " . $file . "<br>";
}
$d->close();
?>