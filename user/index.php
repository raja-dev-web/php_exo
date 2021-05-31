<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <style>
        .table, .thead, .tr, .td 
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
<form action="index.php" method="post">
    <table>
        <tbody>
            <tr>
                <td colspan="2">
                    <h1 style="text-align: center;">USER DETAILS</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">E-Mail :</label>
                </td>
                <td>
                    <input id="email" type="text" name="email"/><br />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password :</label>
                </td>
                <td>
                    <!-- <textarea name="contenu" id="contenu" cols="30" rows="5"></textarea><br> -->
                    <input id="password" type="password" name="password"/><br />
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="Insert" value="Add User"/>
                </td>
            </tr>
        </tbody>
    </table>
</form><br><hr><br>
<br><br>
<?php
    try 
    {
        $bdd = new PDO("mysql:host=localhost; dbname=school; charset=utf8", "root", "");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection Established correctly!!!<br/><br />";
    
        if(isset($_POST["email"]) AND isset($_POST["password"])) 
        {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $hash_pwd = password_hash($password, PASSWORD_DEFAULT);
            $req = $bdd->prepare("INSERT INTO `user` (`email`, `password`) VALUES (:email, :pass)");
            // $req = $bdd->prepare("INSERT INTO `article` (`titre`, `contenu`) VALUES (?, ?)");
            $req->bindParam(':email',$email); // if we use ? in insert query, we should use number starting from 1 based on the columns we have in the database as the first parameter of bindParam.
            $req->bindParam(':pass',$hash_pwd);
            $req->execute();
            echo "A new row inserted into the table successfully!!!<br/><br />";
            // $req2 = $bdd->prepare("SELECT * FROM article WHERE titre=:titre AND contenu=:contenu");
?>
            <table class="table">
                <thead>
                    <th class="thead">ID</th>
                    <th class="thead">E-MAIL</th>
                    <th class="thead">PASSWORD</th>
                </thead>
                <tbody>
                    <?php 
                        $reponse = $bdd->query('SELECT * FROM user');           
                        while ($data = $reponse->fetch()) 
                        {
                    ?>
                            <tr class="tr">
                                <td class="td"><?php echo htmlspecialchars($data['id']);?></td>
                                <td class="td"><?php echo htmlspecialchars($data['email']);?></td>
                                <td class="td"><?php echo htmlspecialchars($data['password']);?></td>
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