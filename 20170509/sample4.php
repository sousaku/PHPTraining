<?php
function br() {
    echo nl2br("\n");
}

$s = 0;
$i = 0;
$k = 0;

while ($i <= 3) {
    print($i);
    $i++;
}

do {
    ++$i;
    $s += $i;
} while ($i < 10);
br();
print "１から $i までの和は $s";
br();
for ($i = 0; $i <= 3; $i++) {
    print ("$i<br/>");
}

for ($i = 0; $i < 4; $i++) {
    $arr[] = $i;
    print("$arr[$i]<br/>");
}
print_r($arr);
br();
$like = array("color"=>"red", "food"=>"sushi");
print_r($like);
foreach($like as $color => $value) {
    br();
    print("{$color} : {$value}");
}

foreach($arr as $color => $value) {
    br();
    print("{$color} : {$value}");
}

$like["food"] = "saba";
br();
print_r($like);
br();
echo "yamadahaは" . $like["food"] . "が好き";
 ?>
