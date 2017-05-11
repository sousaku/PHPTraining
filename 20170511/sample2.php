<?php

function br() {
    echo nl2br("\n");
}

function setHeight($minheight = 50) {
    echo "高さは： $minheight";
    br();
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
 ?>
