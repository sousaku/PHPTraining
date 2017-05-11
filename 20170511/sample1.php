<?php

function br() {
    echo nl2br("\n");
}

function familyName($frame, $year) {
    echo "$frame  yamadaが生まれた年は $year";
    br();
}

familyName("yuki", "1975");
familyName("hirobukli", "1978");
familyName("yukiko", "1983");
familyName("hanako", "1899");
familyName("keichi", "1994");

 ?>
