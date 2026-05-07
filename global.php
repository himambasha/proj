<?php
$glob = 25;
function addit() {
GLOBAL $glob;
$glob--;
print "Somevar is $glob";
}
addit();
addit();
addit();
?>