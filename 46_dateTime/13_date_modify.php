<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:24
 */

$date = date_create("2013-05-01");
date_modify($date, "+15 days");
echo date_format($date, "Y-m-d") . "<br>";
date_modify($date, "+1 months");
echo date_format($date, "Y-m-d") . "<br>";
date_modify($date, "+1 years");
echo date_format($date, "Y-m-d") . "<br>";
date_modify($date, "-2 years");
echo date_format($date, "Y-m-d") . "<br>";
date_modify($date, "+1 years -2 months +3 days");
echo date_format($date, "Y-m-d") . "<br>";
?>