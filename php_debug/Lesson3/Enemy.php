<?php
namespace Enemy;

class Enemy
{
    // プロパティ(変数)を定義
    private $choice;

    // インスタンス化する時に引数受け取る
    public function __construct()
    {
        $janken[1] = "グー";
        $janken[2] = "チョキ";
        $janken[3] = "パー";
        $r = random_int(1, 3);
        return $this -> choice = $janken[$r];
        // $this->choice = random_int(1, 3);
    }

    // choiceを取得するメソッドを追加
    public function getChoice(): string
    {
        return $this -> choice;
    }
}
