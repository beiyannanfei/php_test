<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午12:07
 */
echo "<pre>";
// Print the array from gettimeofday()
//gettimeofday() 函数返回当前时间。
print_r(gettimeofday());
/*
Array
(
    [sec] => 1516853286
    [usec] => 627219
    [minuteswest] => -60
    [dsttime] => 0
)
*/
// Print the float from gettimeofday()
echo gettimeofday(true);    //1516853286.6277

?>