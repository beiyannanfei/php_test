<?php

/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午4:51
 */
class Site
{
    /* 成员变量 */
    var $url;       //类的变量使用 var 来声明, 变量也可以初始化值
    var $title;

    /* 成员函数 */
    function setUrl($par)   //函数定义类似 PHP 函数的定义，但函数只能通过该类及其实例化的对象访问。
    {
        $this->url = $par;  //变量 $this 代表自身的对象。
    }

    function getUrl()
    {
        echo $this->url . "<br>";
    }

    function setTitle($par)
    {
        $this->title = $par;
    }

    function getTitle()
    {
        echo $this->title . "<br>";    //PHP_EOL 为换行符。
    }
}

//PHP 中创建对象
$runoob = new Site;
$taobao = new Site;
$google = new Site;

// 调用成员函数，设置标题和URL
$runoob->setTitle("菜鸟教程");
$taobao->setTitle("淘宝");
$google->setTitle("Google 搜索");

$runoob->setUrl('www.runoob.com');
$taobao->setUrl('www.taobao.com');
$google->setUrl('www.google.com');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();





