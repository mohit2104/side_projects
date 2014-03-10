<?php
$xe;
$allow=$_GET["input"];
$file=fopen("input.txt","w");
fwrite($file,$allow);
fclose($file);
//$saferinput = escapeshellarg($input);
 $xe=shell_exec("pie.exe");
 $file1 = file_get_contents('output.txt', true);
 echo $file1;
?>
