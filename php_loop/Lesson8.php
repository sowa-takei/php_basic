<?php
for ($i = 0; $i < 2; $i++) {
    for ($a = 0; $a < ($i + 1)*2-1; $a++) {
        echo  "*";
        for ($j = 3; $j >= 1; $j--) {
            for ($k = 1; $k <= $j; $k++) {
                echo $k;
            }
                echo "<br />";
        }
    }
}
