<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下は自動販売機のお釣りを計算するプログラムです。
// 150円のお茶を購入した際のお釣りを計算して表示してください。
// 計算内容は関数に記述し、関数を呼び出して結果表示すること
// $yen と $product の金額を変更して計算が合っているか検証を行うこと

// 表示例1）
// 10000円札で購入した場合、
// 10000円札x0枚、5000円札x1枚、1000円札x4枚、500円玉x1枚、100円玉x3枚、50円玉x1枚、10円玉x0枚、5円玉x0枚、1円玉x0枚

// 表示例2）
// 100円玉で購入した場合、
// 50円足りません。

$yen = 10000;   // 購入金額
$product = 150; // 商品金額

function calc($yen, $product)
{
    // この関数内に処理を記述
    // お金を配列で定義
    $money = [10000,5000,1000,500,100,50,10,5,1];
    // お釣り
    $change = $yen - $product;
    // お釣りが多い場合
    if ($change > 0) {
        // 返値の箱
        $tmp = [];
        // 配列繰り返し
        foreach ($money as $val) {
            // お釣りを割ったときの整数商を返します.
            // intdivで商を返す
            $tmp[$val] = intdiv($change, $val);
            // 9850 % 5000 = 1余り4850
            $change = $change % $val;
        }
        return $tmp;
    }
    return $change;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お釣り</title>
</head>
<body>
    <section>
        <!-- ここに結果表示 -->
        <?php $result = calc($yen, $product); ?>
        <!-- 配列かどうか判断する -->
            <?php if (is_array($result)) : ?>
                <?php echo "お釣り<br>"; ?>
                    <?php foreach ($result as $key => $val) : ?>
                        <?php echo $key . '円 x ' . $val . '枚<br>'; ?>
                    <?php endforeach ?>
            <?php else : ?>
                <?php echo ($result == 0) ? '過不足なし' : $result . '円不足'; ?>
            <?php endif ?>
    </section>
</body>
</html>