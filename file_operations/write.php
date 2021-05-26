<?php 
    // $file = fopen("file.txt","r+");
    // fputs($file,"Hello cynthia, How are you?");// r+ Replaces the beginning of the text with the number of characters we give
    // echo "Text updated.<br />";
    // fclose($file);
    // $file1 = fopen("file.txt","r");
    // $line = fgets($file1);
    // echo $line;
    // fclose($file1);

    // $file = fopen("new_file.txt","a");
    // fputs($file,"\nHello Raja, How are you?");// a  Replaces the beginning of the text with the number of characters we give
    // echo "Text updated.<br />";
    // fclose($file);
    // $file1 = fopen("new_file.txt","r");
    // $line = fgets($file1);
    // echo $line;
    // fclose($file1);

    $file = fopen("file.txt","w");
    fputs($file,"This is the new text.");// w Replaces the beginning of the text with the number of characters we give
    echo "Text updated.<br />";
    fclose($file);
    $file1 = fopen("file.txt","r");
    $line = fgets($file1);
    echo $line;
    fclose($file1);
?>