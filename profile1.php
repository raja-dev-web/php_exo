<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="profile1.php" method="post" enctype="multipart/form-data">
    <table>
        <tbody>
            <tr>
                <td colspan="2">
                    <h1 style="text-align: center;">CREATE YOUR PROFILE</h1>
                </td>
            </tr>
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
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="Valider"/>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<br><br><hr>
<?php 
    if (isset($_POST["prenom"]) AND isset($_POST["nom"]) AND isset($_POST["Valider"]) AND $_FILES["myfile"]["error"] == 0)  
    {
        if ($_FILES["myfile"]["size"] <= 1000000) 
        {
            $file_info = pathinfo($_FILES["myfile"]["name"]);
            $extension = $file_info["extension"];
            $image_extension = array('jpg','jpeg','png','gif');
            if (in_array($extension, $image_extension)) 
            {
                $filepath = str_replace(' ','_',$_FILES["myfile"]["name"]);
                if (move_uploaded_file($_FILES["myfile"]["tmp_name"],'images/'.$filepath)) 
                {
                   ?>
                   <h2>Here is your created profile</h2>
                   <img alt="profile_pic" src=<?php echo "images/".$filepath; ?> />
                   <p><?php echo "Bienvenue ".$_POST["prenom"]." ".$_POST["nom"]; ?></p>
            <?php
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
    }
    else 
    {
        echo "Please fill all the informations to create your profile.";
    }
?>
</body>
</html>