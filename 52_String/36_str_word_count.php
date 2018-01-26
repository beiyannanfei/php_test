<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午5:15
 */

//str_word_count() 函数计算字符串中的单词数。
echo str_word_count("Hello world!") . "<br>";    //2

print_r(str_word_count("Hello world!", 1)); //Array ( [0] => Hello [1] => world )
echo "<br>";

print_r(str_word_count("Hello world!", 2)); //Array ( [0] => Hello [6] => world )
?>