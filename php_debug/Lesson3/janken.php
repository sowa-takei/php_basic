<?php
// デバック練習問題
// あらかじめ壊れているプログラムを用意してあります。
// コードを読みデバックしつつジャンケンゲームを完成させてください。
// 判定が勝った時のみ勝利回数を表示させてください。
// 例)
// 山田太郎はグーを出しました。
// 相手はチョキを出しました。
// 勝敗は勝ちです。
// 3回目の勝利です。

namespace player;

require("battle.php");
require("Enemy.php");
require("Me.php");


session_start();

if (! isset($_SESSION['result'])) {
    $_SESSION['result'] = 0;
}

class Player
{
    // メソッドの宣言する
    public function choice() :string
    {
        $choice = '';
        switch ($choice) {
            case 1:
                $choice = 'グー';
                break;
            case 2:
                $choice = 'チョキ';
                break;
            case 3:
                $choice = 'パー';
                break;
            default:
                break;
        }
        return $choice;
    }
}

$player = new Player();
$me     = new \Me\Me($_POST["last_name"], $_POST['first_name'], $_POST['choice'], $_POST['choice']);
$enemy  = new \Enemy\Enemy();
$battle = new \Battle\Battle($me, $enemy);

if (! empty($_POST)) {
    $lastName         = $_POST["last_name"];
    $firstName        = $_POST["first_name"];
    $choice           = $_POST["choice"];

    if (! empty($me)) {
        echo $me -> getName().'は'.$me -> getChoice().'を出しました。';
        echo '<br />';
    }
    if (! empty($enemy)) {
        echo "相手は".$enemy -> getChoice().'を出しました。';
        echo "<br />";
    }
    if (! empty($battle)) {
        echo '勝敗は'.$battle -> showResult().'です。';
    }
    if ($battle -> showResult() == '勝ち') {
        $_SESSION['result'] += 1;
        echo '<br />';
        echo $_SESSION['result']. '回目の勝利です。';
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>デバック練習</title>
</head>
<body>
    <section>
    <form action='./janken.php' method="POST">
        <label>姓 :</label>
        <input type="text" name="last_name" value="<?php echo '山田' ?>" />
        <label>名 :</label>
        <input type="text" name="first_name" value="<?php echo '太郎' ?>" />
        <select name='choice'>
            <option value=0 >--</option>
            <option value="グー" >グー</option>
            <option value="チョキ" >チョキ</option>
            <option value="パー" >パー</option>
        </select>
        <input type="submit" value="送信する"/>
    </form>
    </section>
</body>
</html>