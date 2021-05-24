<?php
if (isset($_FILES["myfile"]) AND $_FILES["myfile"]["error"]==0) {

    if ($_FILES["myfile"]["size"] <= 1000000) {
        
        echo "File Name : " .$_FILES["myfile"]["name"]."<br>";
        echo "File Size : " .$_FILES["myfile"]["size"]."<br>";
        $fileinfo = pathinfo($_FILES["myfile"]["name"]);
        echo $fileinfo["extension"]."<br>";
        echo $fileinfo["basename"]."<br>";
        echo $fileinfo["filename"]."<br>";
        echo $fileinfo["dirname"]."<br>";
        // $fileinfo = pathinfo($_FILES["myfile"]["name"]);
        // $uploaded_extension = $fileinfo["extension"];
        // $authorised_extension = $arrayName = array("jpg","jpeg","png","gif");
        // if (in_array($uploaded_extension, $authorised_extension)) 
        // {
        //     move_uploaded_file($_FILES["myfile"]["tmp_name"], "./" .basename($_FILES["myfile"]["name"]));
        //     echo "successfully sent !";
        // }
    }
    
}
?>