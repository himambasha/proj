<?php
 $filename = "sample.txt";
 $fp = fopen($filename, "r");//open file in read mode
 while(!feof($fp)){
 echo fgetc($fp);
 }
fclose($fp);//close file
?>