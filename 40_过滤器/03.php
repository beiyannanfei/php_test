<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午3:31
 */
/*
验证输入
让我们试着验证来自表单的输入。
我们需要做的第一件事情是确认是否存在我们正在查找的输入数据。
然后我们用 filter_input() 函数过滤输入的数据。
在下面的实例中，输入变量 "email" 被传到 PHP 页面：
*/
//http://localhost:63342/mytest/40_%E8%BF%87%E6%BB%A4%E5%99%A8/03.php?email=aaaaa
if (!filter_has_var(INPUT_GET, "email")) {
    echo("没有-email-参数");
} else {
    if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
        echo "不是一个合法的 E-Mail";
    } else {
        echo "是一个合法的 E-Mail";
    }
}

?>