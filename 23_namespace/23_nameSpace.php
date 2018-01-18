<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/18
 * Time: 下午3:22
 */
//在声明命名空间之前唯一合法的代码是用于定义源文件编码方式的 declare 语句。
//所有非 PHP 代码包括空白符都不能出现在命名空间的声明之前。
declare(encoding='UTF-8'); //定义多个命名空间和不包含在命名空间中的代码

//可以在同一个文件中定义不同的命名空间代码 建议使用下面的大括号形式的语法
namespace MyProject {
    const CONNECT_OK = 1;
    class Connection
    { /* ... */
    }

    function connect()
    { /* ... */
    }
}

namespace AnotherProject {
    const CONNECT_OK = 1;
    class Connection
    { /* ... */
    }

    function connect()
    { /* ... */
    }
}
//将全局的非命名空间中的代码与命名空间中的代码组合在一起，只能使用大括号形式的语法。
//全局代码必须用一个不带名称的 namespace 语句加上大括号括起来
namespace { // 全局代码
    session_start();
    $a = MyProject\connect();
    echo MyProject\Connection::start();
}

//子命名空间-与目录和文件的关系很象，PHP 命名空间也允许指定层次化的命名空间的名称。
//因此，命名空间的名字可以使用分层次的方式定义
namespace MyProject\Sub\Level {  //声明分层次的单个命名空间
    //下面的例子创建了
    //常量 MyProject\Sub\Level\CONNECT_OK，
    //类 MyProject\Sub\Level\Connection
    // 和函数 MyProject\Sub\Level\Connect。
    const CONNECT_OK = 1;
    class Connection
    { /* ... */
    }

    function Connect()
    { /* ... */
    }
}







