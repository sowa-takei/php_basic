<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];

//行ごとの合計
$row_total = [
    'r1' => array_sum($arr['r1']),
    'r2' => array_sum($arr['r2']),
    'r3' => array_sum($arr['r3']),
];

//列ごとの合計
$column_total = [
    'c1' => array_sum(array_column($arr, 'c1')),
    'c2' => array_sum(array_column($arr, 'c2')),
    'c3' => array_sum(array_column($arr, 'c3')),
];

//全ての合計
$all_total = 0;
foreach ($column_total as $total) {
    $all_total = $all_total + $total;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
}
</style>
</head>
<body>
    <table border1 = "1">
        <thead>
            <!--1行目-->
            <tr>
                <th>___</th>
                <th>_c1</th>
                <th>_c2</th>
                <th>_c3</th>
                <th>横合計</th>
            </tr>
        </thead>
        <tbody>
            <!-- 2~4行目 -->
            <!-- $arr配列のキー -->
            <?php foreach ($arr as $row_key => $row_arr) : ?>
                <tr>
                    <!-- 行頭 -->
                    <!-- r1,r2,r3を出力 -->
                    <td><?php echo $row_key ?></td>

                    <!-- 行の各数値 -->
                    <?php foreach ($row_arr as $key => $row_value) : ?>
                        <td><?php echo $row_value; ?></td>
                    <?php endforeach ?>

                    <!-- 行の合計 -->
                    <td><?php echo $row_total[$row_key]; ?></td>
                </tr>
            <?php endforeach ?>
            <!-- 5行目 -->
            <tr>
                <!-- 行頭 -->
                <td>縦合計</td>
                <!-- 列ごとの合計 -->
                <?php foreach ($column_total as $column_key => $total) :?>
                    <td><?php echo $total; ?></td>
                <?php endforeach ?>

                <!-- 全ての合計 -->
                <td><?php echo $all_total; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
