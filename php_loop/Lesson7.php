<?php
for ($i =0; $i < 4; $i++) {
    for ($j = 0; $j < 4 - ($i + 1); $j++) {
        echo  "*";
    }
    for ($k = 0; $k < ($i + 1)*2-1; $k++) {
        echo 1;
    }
    echo "<br />";
}
