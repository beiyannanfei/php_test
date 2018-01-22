<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 上午11:46
 */
//fopen() 函数用于在 PHP 中打开文件。此函数的第一个参数含有要打开的文件的名称，第二个参数规定了使用哪种模式来打开文件：
//$file = fopen("./01.php", "r");

//如果 fopen() 函数无法打开指定文件，则返回 0 (false)。
//$file = fopen("welcome.txt", "r") or exit("Unable to open file!");

//fclose() 函数用于关闭打开的文件：
//fclose($file);

//feof() 函数检测是否已到达文件末尾（EOF）
//if (feof($file)) echo "文件结尾";

//逐行读取文件
$file = fopen("./01.php", "r") or exit("无法打开文件!");
while (!feof($file)) {
    echo fgets($file) . "<br>";        //fgets() 函数用于从文件中逐行读取文件。注释：在调用该函数之后，文件指针会移动到下一行。
}
fclose($file);
echo "<hr>";

//fgetc() 函数用于从文件中逐字符地读取文件。
$file = fopen("./01.php", "r") or exit("无法打开文件!");
while (!feof($file)) {
    echo fgetc($file);
}
fclose($file);
?>