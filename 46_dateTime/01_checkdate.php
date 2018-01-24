<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/24
 * Time: 下午5:45
 */

//checkdate() 函数用于验证格利高里日期。
var_dump(checkdate(12, 31, -400));  //false
echo "<br>";
var_dump(checkdate(2, 29, 2003));   //false
echo "<br>";
var_dump(checkdate(2, 29, 2004));   //true

?>