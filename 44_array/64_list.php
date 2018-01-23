<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:23
 */

$my_array = array("Dog", "Cat", "Horse");
//list() 函数用于在一次操作中给一组变量赋值。
list($a, $b, $c) = $my_array;
echo "I have several animals, a $a, a $b and a $c.";    //I have several animals, a Dog, a Cat and a Horse.g

?>