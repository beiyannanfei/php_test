<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午10:24
 */

//time_nanosleep() 函数延迟执行当前脚本若干秒和纳秒。
if (time_nanosleep(3, 500000000) === true) {
    echo "Slept for three and a half a second";
}

?>