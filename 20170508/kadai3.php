<?php
function local() {
    global $var_global_int;
    echo $var_global_int;
}
$var_global_int = 5;
local();
 ?>
