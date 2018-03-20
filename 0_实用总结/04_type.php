<?php
$a = 123;//整型
$b = '123';//字符串型
$c = 1.23;//浮点型
$d = true;//布尔型
$e = null;//NULL型
echo '$a是', gettype($a), '型', '<br />';
echo '$b是', gettype($b), '型', '<br />';
echo '$c是', gettype($c), '型', '<br />';
echo '$d是', gettype($d), '型', '<br />';
echo '$e是', gettype($e), '型', '<br />';

echo "<hr>";
$f = array();
echo '$f是', gettype($f), '型', '<br />';
$g = (object)array();
echo '$g是', gettype($g), '型', '<br />';
echo "<hr>";

$arr = array(
    0 => array('title' => '新闻1', 'viewnum' => 123, 'content' => 'ZAQXSWedcrfv'),
    1 => array('title' => '新闻2', 'viewnum' => 99, 'content' => 'QWERTYUIOPZXCVBNM'),
    2 => array('title' => '新闻2', 'viewnum' => 99, 'content' => 'QWERTYUIOPZXCVBNM')
);

echo '不统计多维数组：' . count($arr, 0);//count($arr,COUNT_NORMAL)
echo "<br/>";
echo '统计多维数组：' . count($arr, 1);//count($arr,COUNT_RECURSIVE)
echo "<hr/>";

$obj = (object)array();
$obj->a = 10;
$obj->b = 20;
$obj->c = 30;
echo json_encode($obj) . "<br>";
echo $obj->a . "<br>";
//echo $obj['c']; //error
$key = "c";
echo $obj->$key;




