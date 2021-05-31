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
<?php
        try 
        {
            $bdd = new PDO("mysql:host=localhost; dbname=school; charset=utf8", "root", "");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if (isset($_GET['id'])) 
            {
                $row_id = $_GET['id'];
                $request_query = $bdd->prepare("SELECT * FROM article WHERE id = :id");
                $request_query->bindValue(':id',$row_id);
                $request_query->execute();
                $retrive_article = $request_query->fetch();
?>
                <form action="update_id.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <h1 style="text-align: center;">UPDATE ARTICLE</h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="id">ID :</label>
                                </td>
                                <td>
                                    <input id="id" type="hidden" name="id" value="<?php echo htmlspecialchars($row_id); ?>"/><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="titre">Title :</label>
                                </td>
                                <td>
                                    <input id="titre" type="text" name="titre" value="<?php echo htmlspecialchars($retrive_article["titre"]); ?>"/><br />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="contenu">Content :</label>
                                </td>
                                <td>
                                    <textarea name="contenu" id="contenu" cols="30" rows="5"> <?php echo htmlspecialchars($retrive_article["contenu"]); ?></textarea><br>
                                    <!-- <input id="contenu" type="text" name="contenu"/><br /> -->
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                <img alt="profile_pic" src=<?php echo htmlspecialchars($retrive_article['file_path']);?>>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="file" name="myfile" /> <br /><br />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <input type="submit" name="Update" value="Update Article"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form><br><hr><br>
                <br><br>
    <?php
                    $request_query->closeCursor();
                    // $bdd=null;
            }

            if(isset($_POST["id"]) AND isset($_POST["titre"]) AND isset($_POST["contenu"]) AND $_FILES["myfile"] AND $_FILES["myfile"]["error"] == 0 AND isset($_POST["Update"])) 
            {
                if ($_FILES['myfile']["size"] <= 1000000) 
                {
                    $file_info = pathinfo($_FILES['myfile']["name"]);
                    $extension = $file_info["extension"];
                    $image_extension = array('jpg','jpeg','png','gif');
                    if (in_array($extension, $image_extension)) 
                    {
                        $filepath = str_replace(' ','_',$_FILES['myfile']["name"]);
                        $url = 'articles/'.uniqid()."_".$filepath;
                        if (move_uploaded_file($_FILES['myfile']["tmp_name"],$url)) 
                        {
                            $filearea = $url;
                            $id = $_POST["id"];
                            $title = $_POST["titre"];
                            $content = $_POST["contenu"];
                            $req = $bdd->prepare("UPDATE article SET titre=:title, contenu=:content, file_path=:filepaths WHERE id=:id");
                            $req->bindParam(':id',$id);
                            $req->bindParam(':title',$title); 
                            $req->bindParam(':content',$content);
                            $req->bindParam(':filepaths',$filearea);
                            $req->execute();
                            echo "A row is updated successfully!!!<br/><br /><hr>";
                        }
                        else 
                        {
                            echo "Problem in loading the image";
                        }
                    }
                    else 
                    {
                        echo "The file you uploaded is not an image.";
                    }
                }
                else 
                {
                    echo "File is too large";
                }
    ?>
                <table class="table">
                    <thead>
                    
                        <th class="thead">ID</th>
                        <th class="thead">TITLE_NAME</th>
                        <th class="thead">CONTENT</th>
                        <th class="thead">FILE PATH</th>
                    </thead>
                    <tbody>
                    <?php 
                        $reponse = $bdd->prepare("SELECT * FROM article WHERE id=:id"); 
                        $reponse->bindParam(':id',$id); 
                        $reponse->execute();         
                        while ($data = $reponse->fetch()) 
                        {
                    ?>
                            <tr class="tr">
                                <td class="td"><?php echo htmlspecialchars($data['id']);?></td>
                                <td class="td"><?php echo htmlspecialchars($data['titre']);?></td>
                                <td class="td"><?php echo htmlspecialchars($data['contenu']);?></td>
                                <td class="td"><img alt="profile_pic" src=<?php echo $data['file_path']; ?> /></td>
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
        } 
        
        catch (PDOException $e) 
        {
            echo "Error : ".$e->getMessage();
        }
        
                ?>
</body>
</html>