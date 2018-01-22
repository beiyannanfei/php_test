<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午3:29
 */

/*
有两种过滤器：
Validating 过滤器：
用于验证用户输入
严格的格式规则（比如 URL 或 E-Mail 验证）
如果成功则返回预期的类型，如果失败则返回 FALSE

Sanitizing 过滤器：
用于允许或禁止字符串中指定的字符
无数据格式规则
始终返回字符串
*/

/*
选项和标志
选项和标志用于向指定的过滤器添加额外的过滤选项。
不同的过滤器有不同的选项和标志。
在下面的实例中，我们用 filter_var() 和 "min_range" 以及 "max_range" 选项验证了一个整数：
*/

$var = 300;

$int_options = array(
    "options" => array
    (
        "min_range" => 0,
        "max_range" => 256
    )
);

if (!filter_var($var, FILTER_VALIDATE_INT, $int_options)) {
    echo("不是一个合法的整数");
} else {
    echo("是个合法的整数");
}

?>