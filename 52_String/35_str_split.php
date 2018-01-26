<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午5:13
 */

//str_split() 函数把字符串分割到数组中。
print_r(str_split("Hello"));    //Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )
echo "<br>";
print_r(str_split("Hello", 3)); //Array ( [0] => Hel [1] => lo )
?>