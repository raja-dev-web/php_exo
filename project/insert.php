<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <?php
        $bdd = new PDO("mysql:host=localhost; dbname=school; charset=utf8", "root", "");
        if ($bdd) 
        {
            echo "Connection Established correctly!!!<br/><br />";
            $insert_db = $bdd->exec("INSERT INTO `article` (`titre`, `contenu`) VALUES ('titre3', 'contenu3')");
            echo "A new row inserted into the table successfully!!!<br/><br />";
        }
    ?>
</body>
</html>