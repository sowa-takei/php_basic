<?php
// デバック練習
// 氏名入力時に入力内容が表示されるようにプログラムを完成させてください。
// $Lesson1 = $_POST;
if (!empty($_POST)) {
    $lastName = $_POST["last_name"];
    $firstName= $_POST["first_name"];
    if ($lastName != null && $firstName != null) {
        echo "私の名前は".$lastName.$firstName."です。";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デバック練習!</title>
</head>
<body>
<form action = "Lesson1.php" method="POST">
        <h2>テスト</h2>
        <label>姓 :</label>
        <input type="text" name="last_name">
        <label>名 :</label>
        <input type="text" name="first_name" >
        <input type="submit" value="送信する">
    </form>
</body>
</html>