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
    if (isset($_GET['id'])) 
    {
        try 
        {
            $bdd = new PDO("mysql:host=localhost; dbname=school; charset=utf8", "root", "");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $row_id = $_GET['id'];
            $request_query = $bdd->prepare("SELECT file_path FROM article WHERE id = :id");
            $request_query->bindValue(':id',$row_id);
            $request_query->execute();
            $retrieve_row = $request_query->fetch();
            if(isset($retrieve_row['file_path']))
            {
                unlink($retrieve_row['file_path']);
            }
            $reponse = $bdd->prepare("DELETE FROM article WHERE id=:id");
            $reponse->bindParam(':id',$row_id);
            $reponse->execute();
            echo "The row with id ".$row_id." is removed from the database";
        }
        catch (PDOException $e) 
        {
            echo "Error : ".$e->getMessage();
        }
    }

?>
</body>
</html>