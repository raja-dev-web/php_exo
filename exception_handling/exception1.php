<?php
    function inverse($x)
    {
        if($x == 0)
        {
            throw new Exception("Division by zero");
            
        }
        return 1/$x;
    }
    try 
    {
        echo inverse(0);
    } 
    catch (Exception $e) 
    {
        echo "Exception received : ".$e->getMessage();
    }

?>