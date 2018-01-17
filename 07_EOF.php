<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/17
 * Time: 下午3:40
 */
echo <<<EOF
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
EOF;
// 结束需要独立一行且前后不能空格

echo "<br>";

$name="runoob";
$a= <<<EOF
    "abc"$name<br>
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;
?>