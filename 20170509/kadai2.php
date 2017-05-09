<?php
function br() {
    echo nl2br("\n");
}

$var = "Hello world!";

echo $var;
br();
echo str_replace("world", "kitty", $var);
 ?>
