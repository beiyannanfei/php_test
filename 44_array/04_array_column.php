<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午6:38
 */
print("<pre>");
$a = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);

$last_names = array_column($a, 'last_name');    //从记录集中取出 last_name 列  类似js的_.pluck
print_r($last_names);
echo "<hr>";
$last_names = array_column($a, 'last_name', 'id');
print_r($last_names);
print("</pre>");

?>