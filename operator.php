<?php

$i=2;

echo "EQUAL\n";

var_dump($i===1);
var_dump($i===2);

var_dump($i!==1);
var_dump($i!==2);

$s="php";

var_dump($s==="PHP");
var_dump($s==="php");
var_dump($s=="php");

$f = 0.3;
var_dump($f === 0.3);

//
echo "\n";
echo "0.1+0.2 と 0.3 を高精度のprintfで表示\n";
printf("0.1+0.2: %.2f \n", $f);
printf("    0.3: %.2f \n", 0.3);