<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午2:38
 */
//在您把用户信息存储到 PHP session 中之前，首先必须启动会话。注释：session_start() 函数必须位于 <html> 标签之前：
session_start();
// 存储 session 数据
$_SESSION['views'] = 1;
?>

<html>
<head>
  <meta charset="utf-8">
  <title>菜鸟教程(runoob.com)</title>
</head>
<body>

<?php
// 检索 session 数据
echo "浏览量：" . $_SESSION['views'];
?>

</body>
</html>
