<?php

$i=3;

$k=$i**3;

echo $k;
echo "\n";

// 値を入れる
$bool_t = true;
$bool_f = false;
var_dump($bool_t);
var_dump($bool_f);

// trueやfalseは、大文字で書いてもよい
$bool_t_large = TRUE;
var_dump($bool_t_large);

// 数字
$num_string = '999';
var_dump($num_string);

// 数値
$num_int = 999;
var_dump($num_int);

define('TEST_FLOAT',1.23);
var_dump(TEST_FLOAT);