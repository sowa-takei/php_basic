<?php
// 以下はランダムな数字を格納した配列を表示するプログラムです。
// 配列内の隣合う数字を比較して左側から小さい順に表示されるよう配列の中身を並び替えてください。
// 並び替えはfor文を使用すること

$arr = [99, 3, 12, 45, 60, 100, 31, 7, 28];

// 例）
// 4, 3, 1, 2
// ↓
// 3, 4, 1, 2
// ↓
// 3, 1, 4, 2
// ↓
// 3, 1, 2, 4
// ↓
// 1, 3, 2, 4
// ↓
// 1, 2, 3, 4←これが画面に表示される

// 配列用意
$arr = [99, 3, 12, 45, 60, 100, 31, 7, 28];

// ここで並び替え処理
// sort($arr);
// count($arr)配列の数だけ実施
for ($i = 0; $i < count($arr); $i++) {
    for ($n = 1; $n < count($arr); $n++) {
        if ($arr[$n - 1] > $arr[$n]) {
            $temp = $arr[$n];
            $arr[$n] = $arr[$n - 1];
            $arr[$n - 1] = $temp;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>数字並び替えプログラム!</title>
</head>
<body>
    <?php echo implode(",", $arr); ?>
</body>
</html>
