<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午2:34
 */

$filename = "./16_md5_file.php";
    //md5_file() 函数计算文件的 MD5 散列
$md5file = md5_file($filename);
echo $md5file;  //428fef2390cbf72500f40afda91151ee
?>