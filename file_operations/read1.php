<?php 
    $file = fopen("new_file.txt","r");
    while ($line = fgets($file)) // fgets() reads the file line by line. once the line gets 0 it will come out of the loop
    {
        echo $line."<br />";
    }
    fclose($file);
?>