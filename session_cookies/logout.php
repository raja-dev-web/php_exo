<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
        if (isset($_SESSION["prenom"])) {
            session_destroy();
            echo "Good Bye and See you soon!!!";
        }
        else {
            echo "You dont even connected";
        }
        ?><br>
        Would you like to Connect? Click the button below!!!
        <br>
    </p>
    <a href="session.php"><button type="button">Profile</button></a>
</body>
</html>