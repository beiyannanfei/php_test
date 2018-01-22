<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午2:39
 */

session_start();

if (isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1;
} else {
    $_SESSION['views'] = 1;
}
echo "浏览量：" . $_SESSION['views'];

//如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。unset() 函数用于释放指定的 session 变量：
if (isset($_SESSION['views']) && $_SESSION['views'] === 10) {
    unset($_SESSION['views']);
}
?>