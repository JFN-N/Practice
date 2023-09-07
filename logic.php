<?php

echo "論理演算子の確認\n";

var_dump(true && false);
var_dump(true || false);

$i=30;

switch($i){
    case 0:
        echo "うんこ\n";
        break;

    case 30:
        echo "しっこ\n";
        break;

    default:
        echo "やまがた\n";
        break;

}