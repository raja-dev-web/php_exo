<?php
session_start();
$_SESSION["nom"] = "ALAND";
$_SESSION["prenom"] = "Arokiyaraja";
$_SESSION["age"] = "30";

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
    <h3>Bonjour Mr <?php echo $_SESSION["prenom"];?>, Welcome to our website.</h3>
    <a href="profile.php"><button type="button">Profile</button></a>
    
</body>
</html>