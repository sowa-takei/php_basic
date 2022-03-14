<?php
for ($i =1; $i <= 4; $i++) {
    for ($j = 3; $j >= $i; $j--) {
        echo  "*";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo $k;
    }
    for ($l = 3; $l >=6-$k; $l--) {
        echo $l-(4-$i);
    }
    echo "<br />";
}
