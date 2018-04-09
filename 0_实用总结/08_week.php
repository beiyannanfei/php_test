<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 2018/4/3
 * Time: 上午11:45
 */
date_default_timezone_set("Asia/Shanghai");

//本周一
echo date('Y-m-d', (time() - ((date('w') == 0 ? 7 : date('w')) - 1) * 24 * 3600)); //w为星期几的数字形式,这里0为周日
echo '<br>';
//本周日
echo date('Y-m-d', (time() + (7 - (date('w') == 0 ? 7 : date('w'))) * 24 * 3600)); //同样使用w,以现在与周日相关天数算
echo '<br>';
//上周一
echo date('Y-m-d', strtotime('-1 monday', time())); //无论今天几号,-1 monday为上一个有效周未
echo '<br>';
//上周日
echo date('Y-m-d', strtotime('-1 sunday', time())); //上一个有效周日,同样适用于其它星期
echo '<br>';
//本月一日
echo date('Y-m-d', strtotime(date('Y-m', time()) . '-01 00:00:00')); //直接以strtotime生成
echo '<br>';
//本月最后一日
echo date('Y-m-d', strtotime(date('Y-m', time()) . '-' . date('t', time()) . ' 00:00:00')); //t为当月天数,28至31天
echo '<br>';
//上月一日
echo date('Y-m-d', strtotime('-1 month', strtotime(date('Y-m', time()) . '-01 00:00:00'))); //本月一日直接strtotime上减一个月
echo '<br>';
//上月最后一日
echo date('Y-m-d', strtotime(date('Y-m', time()) . '-01 00:00:00') - 86400); //本月一日减一天即是上月最后一日
echo '<hr>';


//echo date('Y-m-d H:i:s', strtotime('+2 monday', time()));
//echo '<br>';

$date = mktime(20, 45, 37, date('m'), date('d') + 7, date('Y'));
echo date("Y-m-d H:i:s", $date);
echo '<br>';
echo date('Y-m-d H:i:s', strtotime('+1 sunday', $date) + 24 * 3600);

echo '<hr>';
$nextC = strtotime('+1 sunday', time()) + 24 * 3600;
echo $nextC . "<br>";
echo date('Y-m-d H:i:s', $nextC);


