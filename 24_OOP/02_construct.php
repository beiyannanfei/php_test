<?php

/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午4:59
 */
class Site
{
    /* 成员变量 */
    var $url;
    var $title;

    function __construct($par1, $par2)  //PHP 构造函数
    {
        $this->url = $par1;
        $this->title = $par2;
    }

    /* 成员函数 */
    function setUrl($par)
    {
        $this->url = $par;
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
        echo $this->title . "<br>";
    }
}

$runoob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();

