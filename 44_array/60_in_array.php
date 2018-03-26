<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:19
 */

$sites = array("Google", "Runoob", "Taobao", "Facebook");
var_dump(in_array("Runoob0", $sites));
echo '<br>';
if (in_array("Runoob", $sites)) {
    echo "找到匹配项！";  //找到匹配项！
} else {
    echo "没有找到匹配项！";
}

?>