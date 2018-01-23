<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/23
 * Time: 下午6:27
 */

$temp_files = array("temp15.txt", "Temp10.txt", "temp1.txt", "Temp22.txt", "temp2.txt");
//natcasesort() 函数用"自然排序"算法对数组进行排序。键值保留它们原始的键名。
//在自然排序算法中，数字 2 小于 数字 10。在计算机排序算法中，10 小于 2，因为 "10" 中的第一个数字小于 2。
//该函数不区分大小写。
//如果成功，该函数返回 TRUE，如果失败则返回 FALSE。
natsort($temp_files);
echo "Natural order: ";
print_r($temp_files);   //Natural order: Array ( [1] => Temp10.txt [3] => Temp22.txt [2] => temp1.txt [4] => temp2.txt [0] => temp15.txt )
echo "<br />";

natcasesort($temp_files);
echo "Natural order case insensitve: "; //Natural order case insensitve: Array ( [2] => temp1.txt [4] => temp2.txt [1] => Temp10.txt [0] => temp15.txt [3] => Temp22.txt )
print_r($temp_files);

?>