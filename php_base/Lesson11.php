<?php
echo date("Y年m月d日 H時i分s")."<br />";
echo "三日目<br />";
echo date("Y年m月d日 H時i分s", strtotime("+3 day"))."<br />";
echo "12時間前<br />";
echo date("Y年m月d日 H時i分s", strtotime("-12 hour"))."<br />";
echo "2020年元旦から現在までの日数<br />";
// 現在の日付け取得
$today = date("Y-m-d");
// タイムスタンプへ変換
$today = strtotime($today);
$day = strtotime('2020-01-01');
echo ($today - $day) / (60 * 60 * 24). '日';//00日(経過日数)を表示
