<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:59
 */

function convertSpace($string)
{
    return str_replace(" ", "_", $string);
}

$string = "Peter is a great guy!";

echo filter_var($string, FILTER_CALLBACK, array("options" => "convertSpace"));
?>