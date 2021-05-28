<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        div{
            padding-top: 10px;
            text-align: center;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
<body>
<?php
    require "nav.php";
?>
<div>
    <!-- <h1>Registration Form</h1><br><hr><br> -->
    <form action="log_user.php" method="post">
    <table>
        <tbody>
            <tr>
                <td colspan="2">
                    <h1 style="text-align: center;">LOG IN TO YOUR PROFILE</h1>
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
                    <input id="password" type="password" name="password"/><br />
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="Login" value="Login"/>
                </td>
            </tr>
        </tbody>
    </table>
</form>
</div>
<br><hr><br> 
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
            // echo $email;
            // echo $password;
            $req = $bdd->prepare("SELECT * FROM `user` WHERE email=:email");
            $req->bindValue(':email',$email);
            $req->execute();
            $reponse = $req->fetch();
            $u_email = $reponse["email"];
            $u_pwd = $reponse["password"];
            // $hash_pwd = password_hash($password, PASSWORD_DEFAULT);
            if($u_pwd AND password_verify($password,$u_pwd)) 
            {
                $_SESSION["email"] = $u_email;
                header("Location: conn.php");
                echo "You are logged in successfully!!!";
            }
            else 
            {
                echo "username or password incorrect!!!";
            }
            // $reponse->closeCursor();
            // $bdd=null;
               
        }
    } 
    catch (PDOException $e) 
    {
        echo "Error : ".$e->getMessage();
    }
    
?>
</body>
</html>