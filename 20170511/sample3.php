<?php

function br() {
    echo nl2br("\n");
}

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10);
 ?>
