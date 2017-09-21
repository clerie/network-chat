<?php
$file = "data/todo.txt";
$myfile = fopen($file, "r") or die("Unable to open file!");
echo str_replace("\n", "<br/>", fread($myfile,filesize($file)));
fclose($myfile);
?> 
