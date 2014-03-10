<?php
$a=array("codenov1.exe","codenov2.exe","reagain.exe","codenov4.exe","codenov5.exe");
$xe;
$c=$a[$_GET["code"]-1];
$allow=$_GET["input"];
$file=fopen("input.txt","w");
fwrite($file,$allow);
fclose($file);
//$saferinput = escapeshellarg($input);
 $xe=shell_exec($c);
 $file1 = file_get_contents('output.txt', true);
 echo $file1;
?>
