<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <style>
        .table, .th, .tr, .td 
        {
            border: 1px solid black;
        }
        .td
        {
            text-align: center;
        }
    </style>
</head>
<body>
<form action="insert_data.php" method="post" enctype="multipart/form-data">
    <table>
        <tbody>
            <tr>
                <td colspan="2">
                    <h1 style="text-align: center;">INSERT ARTICLE</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="titre">Title :</label>
                </td>
                <td>
                    <input id="titre" type="text" name="titre"/><br />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="contenu">Content :</label>
                </td>
                <td>
                    <textarea name="contenu" id="contenu" cols="30" rows="5"></textarea><br>
                    <!-- <input id="contenu" type="text" name="contenu"/><br /> -->
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="Insert" value="Insert Article"/>
                </td>
            </tr>
        </tbody>
    </table>
</form><br><hr><br>
<br><br>
    <?php
        $bdd = new PDO("mysql:host=localhost; dbname=school; charset=utf8", "root", "");
        if ($bdd) 
        {
            echo "Connection Established correctly!!!<br/><br />";
        }
        else 
        {
            echo "Connection cannot be able to establish.";
                
        }
        if(isset($_POST["titre"]) AND isset($_POST["contenu"])) 
        {
            $title = $_POST["titre"];
            $content = $_POST["contenu"];
            $req = $bdd->prepare("INSERT INTO `article` (`titre`, `contenu`) VALUES (:title, :content)");
            // $req = $bdd->prepare("INSERT INTO `article` (`titre`, `contenu`) VALUES (?, ?)");
            $req->bindParam(':title',$title); // if we use ? in insert query, we should use number starting from 1 based on the columns we have in the database as the first parameter of bindParam.
            $req->bindParam(':content',$content);
            $req->execute();
            echo "A new row inserted into the table successfully!!!<br/><br />";
            // $req2 = $bdd->prepare("SELECT * FROM article WHERE titre=:titre AND contenu=:contenu");
    ?>
    <table class="table">
        <thead>
            <th class="thead">ID</th>
            <th class="thead">TITLE_NAME</th>
            <th class="thead">CONTENT</th>
        </thead>
        <tbody>
    <?php 
        $reponse = $bdd->query('SELECT * FROM article');           
        while ($data = $reponse->fetch()) 
        {
            ?>
                <tr class="tr">
                    <td class="td"><?php echo htmlspecialchars($data['id']);?></td>
                    <td class="td"><?php echo htmlspecialchars($data['titre']);?></td>
                    <td class="td"><?php echo htmlspecialchars($data['contenu']);?></td>
                </tr">
        <?php
        }
        ?>
        </tbody>
    </table>
    <?php
        $reponse->closeCursor();
        $bdd=null;
               
        }
    ?>
</body>
</html>