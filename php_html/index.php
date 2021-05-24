<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hello.php" method="get">
    <p>
        <label for="prenom">Prenom :</label>
        <input id="prenom" type="text" name="prenom"/>
        <label for="nom">Nom :</label>
        <input id="nom" type="text" name="nom"/>
        <input type="submit" name="Valider"/>
    </p>
    </form>
<br>
    <form action="hello.php" method="post">
    <p>
        <label for="prenom">Prenom :</label>
        <input id="prenom" type="text" name="prenom"/>
        <label for="nom">Nom :</label>
        <input id="nom" type="text" name="nom"/>
        <input type="submit" name="Valider"/>
    </p>
    </form>
</body>
</html>