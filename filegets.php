<?php
 $filename = "sample.txt";
 $fp = fopen($filename, "r");//open file in read mode
 echo fgets($fp);
fclose($fp);//close file
?>