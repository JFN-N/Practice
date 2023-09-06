<?php

class クラス名
{
    //
    private $変数;

    public function 関数()
    {
        // 処理
        echo "メソッドの処理 \n";
    }
}

// クラスからインスタンス（オブジェクト）を作ってみる
$obj = new クラス名();
var_dump($obj);
$obj->関数(); // メソッドを呼び出す