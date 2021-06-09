<?php
session_start();
if(!isset($_SESSION["token"]))
{
    $_SESSION["token"] = bin2hex(random_bytes(32));
}
else 
{
    $token = $_SESSION["token"];
}  
try 
{
    $bdd = new PDO("mysql:host=localhost; dbname=school; charset=utf8", "root", "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection Established correctly!!!<br/><br />";
    if(isset($_POST["email"]) AND isset($_POST["password"]) AND $_POST["token"]==$token) 
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $req = $bdd->prepare("SELECT * FROM `user` WHERE email=:email");
        $req->bindValue(':email',$email);
        $req->execute();
        $reponse = $req->fetch();
        $u_email = $reponse["email"];
        $u_pwd = $reponse["password"];
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
    $bdd=null;   
    }
    else 
    {
        echo "Attention!!!! Your website would have been hacked.";
    }
} 
catch (PDOException $e) 
{
    echo "Error : ".$e->getMessage();
}
?>