<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午3:27
 */

//sscanf() 函数根据指定的格式解析来自一个字符串的输入。 sscanf() 函数基于格式字符串解析字符串到变量中。
//如果只向该函数传递两个参数，数据将以数组的形式返回。否则，如果传递了额外的参数，那么被解析的数据会存储在这些参数中。
//如果区分符的数目大于包含它们的变量的数目，则会发生错误。不过，如果区分符的数目小于包含它们的变量的数目，则额外的变量包含 NULL。

$str = "age:30 weight:60kg";
sscanf($str, "age:%d weight:%dkg", $age, $weight);
// show types and values
var_dump($age, $weight);    //int(30) int(60)
echo "<hr>";

$str = "If you divide 4 by 2 you'll get 2";
$format = sscanf($str, "%s %s %s %d %s %d %s %s %c");
print_r($format);
?>