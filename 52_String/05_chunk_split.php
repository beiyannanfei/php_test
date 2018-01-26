<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午11:07
 */

//chunk_split() 函数把字符串分割为一连串更小的部分。
//注释：该函数不改变原始字符串。

$str = "Hello world!";
//在每六个字符后分割一次字符串，并在每个分割后添加 "..."：
echo chunk_split($str, 6, "...");   //Hello ...world!...
?>