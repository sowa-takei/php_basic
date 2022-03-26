<?php
$array = array("日本" => "東京" , "アメリカ" => "ワシントン" , "イギリス" => "ロンドン" , "フランス" => "パリ");
foreach ($array as $key => $value) {
    echo "{$key}の首都は{$value}です。";
}
