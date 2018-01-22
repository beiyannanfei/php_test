<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 下午3:07
 */
//创建一个自定义的 Exception 类
//创建自定义的异常处理程序非常简单。我们简单地创建了一个专门的类，当 PHP 中发生异常时，可调用其函数。该类必须是 exception 类的一个扩展。
//这个自定义的 customException 类继承了 PHP 的 exception 类的所有属性，您可向其添加自定义的函数。
//我们开始创建 customException 类：

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

$email = "someone@example...com";

try {
    // 检测邮箱
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        // 如果是个不合法的邮箱地址，抛出异常
        throw new customException($email);
    }
} catch (customException $e) {
//display custom message
    echo $e->errorMessage();
}

?>