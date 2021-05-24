<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php 
    if (isset($_GET["prenom"]) AND isset($_GET["nom"]) ) {
        echo $_GET["prenom"]." ".$_GET["nom"].", Bienvenue!";
    }
    elseif (isset($_POST["prenom"]) AND isset($_POST["nom"])) {
        echo $_POST["prenom"]." ".$_POST["nom"].", Bienvenue!";
    }
    else{
        echo "Please give your firstname and lastname. Thank you!";
    }
    ?>
</body>
</html>