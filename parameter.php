<?php
// multiply a value by 10 and return it to the caller
function multiply ($value) {
$value = $value * 10;
return $value;
}
$retval = multiply (25);
Print "Return value is $retval\n";
?>