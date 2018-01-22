<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午3:11
 */
//多个异常
//可以为一段脚本使用多个异常，来检测多种情况。
//可以使用多个 if..else 代码块，或一个 switch 代码块，或者嵌套多个异常。这些异常能够使用不同的 exception 类，并返回不同的错误消息：

class customException extends Exception
{
    public function errorMessage()
    {
        // 错误信息
        $errorMsg = '错误行号 ' . $this->getLine() . ' in ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> 不是一个合法的 E-Mail 地址';
        return $errorMsg;
    }
}

$email = "someone@example.com";

try {
    // 检测邮箱
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        // 如果是个不合法的邮箱地址，抛出异常
        throw new customException($email);
    }
    // 检测 "example" 是否在邮箱地址中
    if (strpos($email, "example") !== FALSE) {
        throw new Exception("$email 是 example 邮箱");
    }
} catch (customException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}

?>