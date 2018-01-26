<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午3:23
 */

//similar_text() 函数计算两个字符串的相似度。
echo similar_text("Hello World", "Hello Peter") . "<br>";   //7

//计算两个字符串的百分比相似度
similar_text("Hello World", "Hello Peter", $percent);       //63.636363636364
echo $percent;
?>