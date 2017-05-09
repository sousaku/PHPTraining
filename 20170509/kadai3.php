<?php
function br() {
    echo nl2br("\n");
}

for($i = 1; $i <= 5; $i++) {
    echo "number : {$i}";
    br();
}
 ?>
