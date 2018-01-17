<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/17
 * Time: 下午3:13
 */
function myTest()
{
    static $x = 0;
    echo $x;
    echo "<br>";
    $x++;
}

myTest();
myTest();
myTest();

?>