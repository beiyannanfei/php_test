<?php

/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午3:54
 */
class Emp
{
    public $name = "";
    public $hobbies = "";
    public $birthdate = "";
}

$e = new Emp();
$e->name = "sachin";
$e->hobbies = "sports";
//$e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
$e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

echo json_encode($e);   //{"name":"sachin","hobbies":"sports","birthdate":"08\/05\/1974 12:20:03 pm"}

?>