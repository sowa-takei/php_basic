<?php

namespace SelfIntroduction;

$createAgeGroup = function () {
    $maxAge = 70;
    $minAge = 18;
    $ageGroup = array();
    for ($i = $minAge; $i <= $maxAge; $i++) {
        array_push($ageGroup, $i);
    }
    return $ageGroup;
};

class SelfIntroduction
{
    // プロパティ
    private $lastName;
    private $firstName;
    private $age;
    private $hobby;

    // コンストラクタ
    public function __construct($lastName, $firstName, $age, $hobby)
    {
        $this -> lastName  = $lastName;
        $this -> firstName = $firstName;
        $this -> age       = $age;
        $this -> hobby     = $hobby;
    }

    public function getFullName()
    {
        return $this -> lastName;
        return $this -> firstName;
    }

    public function getAge()
    {
        return $this -> age;
    }

    public function getHobby()
    {
        return $this -> hobby;
    }
}

$selfIntroduction = new SelfIntroduction($lastName, $firstName, $age, $hobby);
$selfIntroduction -> getFullName();
$selfIntroduction -> getAge();
$selfIntroduction -> getHobby();

if (!empty($_POST)) {
    $lastName         = $_POST["last_name"];
    $firstName        = $_POST['first_name'];
    $age              = $_POST['age'];
    $hobby            = $_POST['hobby'];

    if (!empty($selfIntroduction)) {
        echo '私の名前は'.$lastName.$firstName.'年齢は'. $age .'です。';
        echo "<br />";
        echo "趣味は". $hobby. "です。";
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デバック練習</title>
</head>
<body>
    <section>
        <form action="./Lesson3-1.php" method = "POST">
        <label>性 :</label>
        <input type="text" name="last_name">
        <label>名前 :</label>
        <input type="text" name="first_name">
        <label >趣味 :</label>
        <input type="text" name="hobby">
        <select name="age">
            <?php foreach ($createAgeGroup() as $age) : ?>
                <option value="<?php echo $age ?>"><?php echo $age ?></option>
            <?php endforeach ;?>
        </select>
        <input type="submit" value="送信する">
        </form>
    </section>
</body>
</html>