<?php

function br() {
    echo nl2br("\n");
}

$Date = ["A", "B", "C", "D"];
$Date2  = ["E", "F", "G", "H"];

$Eing = [$Date, $Date2];

foreach ($Eing as $value) {
    foreach ($value as $value2) {
        if ($value2 != "B" && $value2 != "F") {
            print $value2;
            br();
        }
    }
}
 ?>
