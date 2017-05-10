<?php
function br() {
    echo nl2br ("\n");
}

function tr() {
    echo nl2br ("\t");
}

$x  =10;
$y = 6;
echo $x + $y;
br();
echo $x += 100;
br();
var_dump($x == 110);
br();
echo ++$x;
br();
echo $x++;
if ($x == 112 and $y == 6) {
    echo "Hello";
    br();
}
$txt1 = "Hello ";
$txt2 = "World";
echo $txt1 . $txt2;
br();
$txt2 .= $txt1;
echo $txt2;
br();
$num = 0;

print '<table border = "1">';
for ($i = 1; $i <= 10; $i++) {
    print '<tr>';
    for ($j =  1; $j <= 10; $j++) {
        print '<td>' . $num = $i * $j . '</td>';
    }
    print '</tr>';
}
print '</table>';
 ?>
