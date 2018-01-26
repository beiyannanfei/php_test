<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午3:22
 */

$filename = "./26_sha1_file.php";
//sha1_file() 函数计算文件的 SHA-1 散列。
$sha1file = sha1_file($filename);
echo $sha1file; //0c65fbe79070217232f04206f0d996ca28894351

?>