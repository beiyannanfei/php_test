<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午2:47
 */

//parse_str() 函数把查询字符串解析到变量中。
//注释：如果未设置 array 参数，由该函数设置的变量将覆盖已存在的同名变量。
//注释：php.ini 文件中的 magic_quotes_gpc 设置影响该函数的输出。如果已启用，那么在 parse_str() 解析之前，变量会被 addslashes() 转换。
parse_str("name=Peter&age=43");
echo $name . "<br>";        //Peter
echo $age . "<hr>";         //43

parse_str("name=Peter&age=43", $myArray);
print_r($myArray);  //Array ( [name] => Peter [age] => 43 )
?>