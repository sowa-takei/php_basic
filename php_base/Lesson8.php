<?php
function num($int)
{
    echo $int + 1;
}
num(776);

// A file should declare new symbols (classes, functions, constants, etc.)
// and cause no other side effects, or it should execute logic with side effects,
// but should not do both. The first symbol is defined on line 2 and the first side effect is on line 6.
