<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/17
 * Time: 下午3:09
 */
$x = 5;
$y = 10;

function myTest()
{
    global $x, $y;
    $x = 50;
    $y = 100;
}

myTest();

echo "$x $y";
echo "<br>";
function myTest1()
{
    $GLOBALS['x'] = 500;
    $GLOBALS['y'] = 1000;
}

myTest1();
echo "$x $y";
?>