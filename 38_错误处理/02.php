<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午2:50
 * 创建自定义错误处理器
 */

// 错误处理函数
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
//    echo "脚本结束";
//    die();
}

//PHP 的默认错误处理程序是内建的错误处理程序。我们打算把上面的函数改造为脚本运行期间的默认错误处理程序。
//可以修改错误处理程序，使其仅应用到某些错误，这样脚本就能以不同的方式来处理不同的错误。
//然而，在本例中，我们打算针对所有错误来使用我们自定义的错误处理程序：
//由于我们希望我们的自定义函数能处理所有错误，set_error_handler() 仅需要一个参数，可以添加第二个参数来规定错误级别
set_error_handler("customError");

// 触发错误
echo($test);

$test = 2;
if ($test > 1) {
    //触发错误
    //在脚本中用户输入数据的位置，当用户的输入无效时触发错误是很有用的。在 PHP 中，这个任务由 trigger_error() 函数完成。
    trigger_error("变量值必须小于等于 1");
}
?>