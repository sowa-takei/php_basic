<?php
for ($i = 1; $i <= 4; $i++) {
    // 最初は$iが1なので*を三回表示
    for ($j = 3; $j >= $i; $j--) {
        echo  "*";
    }
    // 最初は$iが1なので1を表示
    for ($k = 1; $k <= $i; $k++) {
        echo $k;
    }
    for ($l = 3; $l >= 6 - $k; $l--) {
        echo $l-(4-$i);
    }
    echo '<br />';
}
