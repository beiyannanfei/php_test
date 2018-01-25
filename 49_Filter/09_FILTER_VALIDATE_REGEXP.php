<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:24
 */

$string = "Match this string";
//FILTER_VALIDATE_REGEXP 过滤器根据兼容 Perl 的正则表达式来验证值。
var_dump(filter_var($string, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^M(.*)/"))));
// out: /Users/sensoro/bynf/PHP/mytest/49_Filter/09_FILTER_VALIDATE_REGEXP.php:11:string 'Match this string' (length=17)

$string = "123456789";
var_dump(filter_var($string, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^(\+86){0,1}1[3|4|5|6|7|8|9](\d){9}$/"))));
//out: /Users/sensoro/bynf/PHP/mytest/49_Filter/09_FILTER_VALIDATE_REGEXP.php:15:boolean false
?>