<?php
$fp=fopen('sample.txt','a');//open to write a file
fwrite($fp,'BCA');//data for the file
fclose($fp); // closing file
echo "file written sucessfully";
?>