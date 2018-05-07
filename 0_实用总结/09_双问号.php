<?php

$a = 10;
$c = $a ?? 20;
var_dump($c);   //10
echo '<br>';

$d = null;
$e = $d ?? "abcd";
var_dump($e);   //abcd
echo '<br>';

$f = "";
$g = $f ?? "1234";
var_dump($g);       //""
echo '<br>';

$h = 0;
$i = $h ?? "45rf";
var_dump($i);       //0










