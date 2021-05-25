<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="profile.php" method="post" enctype="multipart/form-data">
    <table>
        <tbody>
            <tr>
                <td>
                    <label for="prenom">Prenom :</label>
                </td>
                <td>
                    <input id="prenom" type="text" name="prenom"/><br />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nom">Nom :</label>
                </td>
                <td>
                    <input id="nom" type="text" name="nom"/><br />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="file" name="myfile" /><br /><br />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="Valider"/>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<br><br>
<?php 
    if (isset($_POST["Valider"]))  
    {
        $firstname = $_POST["prenom"];
        $lastname = $_POST["nom"];
        $filepath = "images/" . $_FILES["myfile"]["name"];
        echo "Bienvenue Mr. ".$firstname." ".$lastname."<br /><br />";
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $filepath)) 
        {
        echo "<img alt='profile_photo' src =".$filepath.">";
        }
    }
?>
</body>
</html>