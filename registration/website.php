<?php 
    // $file = fopen("visit_counter.txt","r+");
    // $visit = fgets($file);
    // $counter = $visit+1;
    // fclose($file);
    // $file1 = fopen("visit_counter.txt","w");
    // fputs($file1,$counter);
    // echo "Your website is visited ".$counter." times.";
    // fclose($file1);

    $file = fopen("visit_counter.txt","r+");
    $visit = fgets($file);
    fseek($file, 0);
    $counter = $visit+1;
    fputs($file, $counter);
    fclose($file);
    echo "Your website is visited ".$counter." times.";
?>