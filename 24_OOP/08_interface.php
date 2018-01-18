<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午6:05
 * 使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
 * 接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
 * 接口中定义的所有方法都必须是公有，这是接口的特性。
 * 要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则会报一个致命错误。
 * 类可以实现多个接口，用逗号来分隔多个接口的名称。
 */

// 声明一个'iTemplate'接口
interface iTemplate
{
    public function setVariable($name, $var);

    public function getHtml();
}

// 实现接口
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml()
    {
        $str = "";
        foreach ($this->vars as $name => $value) {
            $str .= $name . " = " . $value . ",";
        }

        return $str;
    }
}

$t = new Template();
$t->setVariable(0, 0);
$t->setVariable(1, 1);
$t->setVariable(2, 2);
echo $t->getHtml();




