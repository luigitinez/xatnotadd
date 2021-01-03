<?php
$text =$_GET['error'];
$myfile = fopen("errorLogs.txt", "w") or die("Unable to open file!");
$date = date("F j, Y, g:i a"); 

fwrite($myfile,$date." -  Init: " .$text);
fwrite($myfile, "\r\n");
fclose($myfile);
?>