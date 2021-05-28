<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        div{
            padding-top: 10px;
            text-align: center;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php 
    require "nav.php";
?>
<div>
    <?php
        if(isset($_SESSION["email"])) 
        {
            echo "<h4>Bonjour ".$_SESSION["email"]."!!!</h4><br /><br />";
            // require "website.php";
        ?>
        <a href="logout.php"><button>LOGOUT</button></a>
        <?php 
        }
        else 
        {
            header("Location: log_user.php");
        }
    ?>
</div>
        
</body>
</html>