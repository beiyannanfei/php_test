<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:39
 */
//time() 函数返回自 Unix 纪元（January 1 1970 00:00:00 GMT）起的当前时间的秒数。
$t = time();
echo($t . "<br>");
echo(date("Y-m-d H:i:s", $t));

?>