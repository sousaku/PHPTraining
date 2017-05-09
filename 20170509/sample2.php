<?php
function br() {
    echo nl2br("\n");
}

//大文字と小文字を区別する定数名
define("GREETING", "Welcome to W3Schools com!");
//大文字と小文字を区別しない定数名
define("GREETING2", "Welcome to W3Schools com!", true);

echo GREETING;
br();
echo greeting2;
 ?>
