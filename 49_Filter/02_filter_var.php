<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:56
 */

//filter_var() 函数通过指定的过滤器过滤一个变量。
//如果成功，则返回被过滤的数据。如果失败，则返回 FALSE。

if (!filter_var("someone@example....com", FILTER_VALIDATE_EMAIL)) {
    echo("E-mail is not valid");
} else {
    echo("E-mail is valid");
}


?>