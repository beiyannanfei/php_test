<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午3:00
 */

//chroot() 函数改变当前进程的根目录为 directory，并把当前工作目录改为 "/"。
//注意：该函数需要 root 权限，且仅在 GNU 和 BSD 系统上仅当使用 CLI、CGI、嵌入式 SAPI 时可用。该函数没有在 Windows 平台上实现。
// Change root directory
chroot("../");

// Get current directory
echo getcwd();
?>