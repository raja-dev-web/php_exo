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
    <p>You are logged in as <?php echo $_SESSION["prenom"]." ".$_SESSION["nom"]. "Your age is" .$_SESSION["age"]."yrs";?><br><br>

    <a href="logout.php"><button type="button">Logout</button></a>
</body>
</html>