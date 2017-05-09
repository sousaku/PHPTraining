<?php
function br() {
    echo nl2br("\n");
}

$var = "Hello world";

//何文字か数える
echo strlen("Hello world");
br();
//何ワードか数える
echo str_word_count("Hello world");
br();
//文字列を逆にする
echo strrev("Hello world");
br();
//文字列内の部分文字列が最初に現れる場所を見つける
echo strpos("Hello world", "world");
br();
//検索文字列に一致したすべての文字列を置換する
echo str_replace("world", "kitty", $var);
 ?>
