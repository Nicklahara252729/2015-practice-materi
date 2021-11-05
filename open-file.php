<?php
$file="files/operasi.txt";
$fh=fopen($file,'a')or die("file error");
$plus= 1;
$p=fwrite($fh,$plus);
for($i=0;$i<10;$i++)
{
   echo $p;
}
?>