<?php
function br() {
    echo nl2br("\n");
}

for($i = 0; $i < 10; $i++) {
    if($i == 5) {
        echo "5についた";
        br();
        continue;
    }
    echo $i;
    br();
}
echo "<hr>";
for($i = 0; $i < 10; $i++) {
    if($i == 5) {
        echo "最後";
        break;
    }
    echo $i;
    br();
}
 ?>
