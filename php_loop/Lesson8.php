<?php
for ($j = 3; $j >= 1; $j--) {
    echo str_repeat('*', 3-$j);
    for ($k = 1; $k <= $j; $k++) {
        echo $k;
    }
    echo '<br />';
}
