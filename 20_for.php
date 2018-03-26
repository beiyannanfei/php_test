<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午3:03
 */
for ($i = 1; $i <= 5; $i++) {
    echo "The number is " . $i . "<br>";
}
echo "<hr>";

$x = array("one", "two", "three");
foreach ($x as $value) {
    echo $value . "<br>";
}
echo "<hr>";

$l = 0;
for (; ;) {
    echo $l . "<br>";
    $l++;
    if ($l > 5) {
        break;
    }
}
echo "last value: $l";