<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 上午11:57
 */
$t = date("H");
echo $t . "<br>";
if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo '<hr>';

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}


