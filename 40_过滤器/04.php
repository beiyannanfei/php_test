<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午3:37
 */

/*
净化输入
让我们试着清理一下从表单传来的 URL。
首先，我们要确认是否存在我们正在查找的输入数据。
然后，我们用 filter_input() 函数来净化输入数据。
在下面的实例中，输入变量 "url" 被传到 PHP 页面：
*/

//http://localhost:63342/mytest/40_%E8%BF%87%E6%BB%A4%E5%99%A8/04.php?url=http://www.ru%C3%A5%C3%A5no%C3%B8%C3%B8ob.com/
if (!filter_has_var(INPUT_GET, "url")) {
    echo("没有 url 参数");
} else {
    $url = filter_input(INPUT_GET, "url", FILTER_SANITIZE_URL);
    echo $url;
}


?>