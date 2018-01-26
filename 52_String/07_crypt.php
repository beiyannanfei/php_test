<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午11:24
 */
/*
定义和用法
crypt() 函数返回使用 DES、Blowfish 或 MD5 算法加密的字符串。

在不同的操作系统上，该函数的行为不同，某些操作系统支持一种以上的算法类型。在安装时，PHP 会检查什么算法可用以及使用什么算法。

确切的算法依赖于 salt 参数的格式和长度。salt 可以通过增加由一个特定字符串与一个特定的加密方法生成的字符串的数量来使得加密更安全。

这里有一些和 crypt() 函数一起使用的常量。这些常量值是在安装时由 PHP 设置的。

常量：

[CRYPT_SALT_LENGTH] - 默认的加密长度。使用标准的 DES 加密，长度为 2
[CRYPT_STD_DES] - 标准的基于 DES 加密有 2 个字符的 salt，来自字母表 "./0-9A-Za-z"。在 salt 中使用无效的字符将引发函数失败。
[CRYPT_EXT_DES] - 扩展的基于 DES 加密有 9 个字符的 salt，由 1 个下划线，后边跟 4 个字节的迭代次数和 4 个字节的 salt 组成。这些被编码为可打印字符，每个字符 6 位，最低有效字符优先。值 0 到 63 被编码为 "./0-9A-Za-z"。在 salt 中使用无效的字符将引发函数失败。
[CRYPT_MD5] - MD5 加密有 12 个字符的 salt，以 $1$ 开始。
[CRYPT_BLOWFISH] - Blowfish 加密有一个以 $2a$、$2x$ 或 $2y$ 开始的 salt，一个两位数的 cost 参数 "$"，以及来自字母表 "./0-9A-Za-z" 中的 22 个字符。使用字母表以外的字符将引发函数返回一个长度为 0 的字符串。"$" 参数是以 2 为底的基于 Blowfish 散列算法的迭代次数的对数，必须在 04-31 范围内。在该范围以外的值将引发函数失败。
[CRYPT_SHA_256] - SHA-256 加密有 16 个字符的 salt，以 $5$ 开始。如果 salt 字符串以 "rounds=<N>$" 开始，N 的数字值用于表示散列循环被执行的次数，这与 Blowfish 中的 cost 参数类似。默认的循环次数是 5000，最小值是 1000，最大值是 999,999,999。任何超出这个范围的 N 的值将会转换成最接近的边界值。
[CRYPT_SHA_512] - SHA-512 加密有 16 个字符的 salt，以 $6$ 开始。 如果 salt 字符串以 "rounds=<N>$" 开始，N 的数字值用于表示散列循环被执行的次数，这与 Blowfish 中的 cost 参数类似。默认的循环次数是 5000，最小值是 1000，最大值是 999,999,999。任何超出这个范围的 N 的值将会转换成最接近的边界值。
在该函数支持多种算法的系统上，上面的常量如果支持则设置为 "1"，否则设置为 "0"。

注释：没有相应的解密函数。crypt() 函数使用一种单向算法。
*/
// 2 character salt
if (CRYPT_STD_DES == 1) {
    echo "Standard DES: " . crypt('something', 'ac') . "n<br>";
} else {
    echo "Standard DES not supported.n<br>";
}

// 4 character salt
if (CRYPT_EXT_DES == 1) {
    echo "Extended DES: " . crypt('something', '_A6..some') . "n<br>";
} else {
    echo "Extended DES not supported.n<br>";
}

// 12 character salt starting with $1$
if (CRYPT_MD5 == 1) {
    echo "MD5: " . crypt('something', '$1$somethin$') . "n<br>";
} else {
    echo "MD5 not supported.n<br>";
}

// Salt starting with $2a$. The two digit cost parameter: 09. 22 characters
if (CRYPT_BLOWFISH == 1) {
    echo "Blowfish: " . crypt('something', '$2a$09$anexamplestringforsalt$') . "n<br>";
} else {
    echo "Blowfish DES not supported.n<br>";
}

// 16 character salt starting with $5$. The default number of rounds is 5000.
if (CRYPT_SHA256 == 1) {
    echo "SHA-256: " . crypt('something', '$5$rounds=5000$anexamplestringforsalt$') . "n<br>";
} else {
    echo "SHA-256 not supported.n<br>";
}

// 16 character salt starting with $5$. The default number of rounds is 5000.
if (CRYPT_SHA512 == 1) {
    echo "SHA-512: " . crypt('something', '$6$rounds=5000$anexamplestringforsalt$');
} else {
    echo "SHA-512 not supported.";
}
?>