<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午3:06
 */
function writeName()
{
    echo "Kai Jim Refsnes";
}

echo "My name is ";
writeName();
echo "<hr>";

function writeNamePar($fname)
{
    echo $fname . " Refsnes.<br>";
}

echo "My name is ";
writeNamePar("Kai Jim");
echo "My sister's name is ";
writeNamePar("Hege");
echo "My brother's name is ";
writeNamePar("Stale");
echo "<hr>";

function writeName2Params($fname, $punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}

echo "My name is ";
writeName2Params("Kai Jim", ".");
echo "My sister's name is ";
writeName2Params("Hege", "!");
echo "My brother's name is ";
writeName2Params("Ståle", "?");
echo "<hr>";

function add($x, $y)
{
    $total = $x + $y;
    return $total;
}

echo "1 + 16 = " . add(1, 16);








