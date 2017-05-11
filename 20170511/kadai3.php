<?php

function br() {
    echo nl2br("\n");
}

function addfive(&$num) {
    $num += 5;
}
function addsix($num) {
    $num += 6;
}

$origin = 10;

addfive($origin);
echo "元の値は $origin";
br();

addsix($origin);
echo "元の値は$origin";

 ?>
