<?php

// 「引数の値を2倍にする」関数
function numToDouble($i)
{
    // 値を2倍にする
    $ret = $i * 2;

    // 戻り値
    return $ret;
}
//
$num = numToDouble(10);
echo "10 を2倍にしたら {$num} になった \n";