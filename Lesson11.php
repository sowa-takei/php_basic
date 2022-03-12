<?php
echo date("Y年m月d日 H時i分s")."<br />";
echo "三日目<br />";
echo date("Y年m月d日 H時i分s", strtotime("+3 day"))."<br />";
echo "12時間前<br />";
echo date("Y年m月d日 H時i分s", strtotime("-12 hour"))."<br />";
echo "2020年元旦から現在までの日数<br />";
$today = date("Y-m-d");// 現在の日付け取得
$today = strtotime($today);// タイムスタンプへ変換
$day = strtotime('2020-01-01');
echo ($today - $day) / (60 * 60 * 24). '日';//(経過日数)
