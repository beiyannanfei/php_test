<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午4:15
 */

//FILTER_VALIDATE_IP filter 过滤器把值作为 IP 地址来验证
$ip = "192.168.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP)) {
    echo "IP is not valid";
} else {
    echo "IP is valid";
}
echo "<hr>";
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    echo "IP is not valid";
} else {
    echo "IP is valid";
}
?>