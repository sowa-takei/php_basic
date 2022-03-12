<?php
$array = array(10,60,90,70,50);
foreach ($array as $score) {
    if ($score > 80) {
        echo "{$score}点は「優」です。<br />";
    } elseif ($score > 60) {
        echo "{$score}点は「良」です。<br />";
    } elseif ($score > 40) {
        echo "{$score}点は「可」です。<br />";
    } else {
        echo "{$score}点は「不可」です。<br />";
    }
}
