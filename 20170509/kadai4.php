<?php
function br() {
    echo nl2br("\n");
}

$colors = ["赤","緑","青","黄色"];

for($i = 0; $i < count($colors); $i++) {
    print($colors[$i]);
    br();
}
 ?>
