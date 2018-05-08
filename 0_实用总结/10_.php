<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 2018/5/7
 * Time: 上午10:48
 */

/**
 * @param $arr
 */
function test(&$arr)
{
    $arr['a'] = 10;
}

$arr = array('b' => 20);

var_dump($arr);
echo '<br>';
test($arr);
var_dump($arr);
