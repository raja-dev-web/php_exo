<?php
$file = fopen("hello.txt","a");
fputs($file,"\nHello Raja, How are you?");// a  Replaces the beginning of the text with the number of characters we give
echo "Text updated.<br />";
fclose($file);
// $file1 = fopen("new_file.txt","r");
// $line = fgets($file1);
// echo $line;
// fclose($file1);
?>