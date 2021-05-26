<?php
    // $file = fopen("file.txt","r");
    // $line = fgets($file);
    // echo $line;
    // fclose($file);

    $file = fopen("new_file.txt","r");
    fseek($file,2); // fseeks used to read a file from after the specified number of characters of the first line. Here it read after 2 characters of the first line
    $line = fgets($file);
    echo $line;
    fclose($file);
?>