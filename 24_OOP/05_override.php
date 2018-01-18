<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午5:06
 * 方法重写
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


// 子类扩展站点类别
class Child_Site extends Site
{
    var $category;

    function setCate($par)
    {
        $this->category = $par;
    }

    function getCate()
    {
        echo $this->category . PHP_EOL;
    }

    function getUrl()   //方法重写
    {
        echo $this->url . PHP_EOL;
        return $this->url;
    }

    function getTitle() //方法重写
    {
        echo $this->title . PHP_EOL;
        return $this->title;
    }
}

$cs = new Child_Site("a", "b");
echo $cs->getTitle();

















