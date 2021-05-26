<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
table,td,tr
{
    align-items: center;
}

div{
    padding-top: 10px;
    text-align: center;
    padding-bottom: 10px;
}
</style>
</head>
<body>
<?php
    require "nav.php";
?>
<div>
    <!-- <h1>Registration Form</h1><br><hr><br> -->
    <form action="signup1.php" method="post">
    <table>
        <tbody>
            <tr>
                <td colspan="2">
                    <h1 style="text-align: center;">CREATE YOUR PROFILE</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username">UserName :</label>
                </td>
                <td>
                    <input id="username" type="text" name="username"/><br />
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
                    <input type="submit" name="Register" value="Register"/>
                </td>
            </tr>
        </tbody>
    </table>
</form>
</div>
<br><hr><br>
<?php 
    if (isset($_POST["username"]) AND isset($_POST["password"])) 
    {
        $user = $_POST["username"];
        $pwd = $_POST["password"];
        $hash_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $file = fopen("user_register1.txt","a");
        fputs($file,$user."\n");
        fputs($file,$hash_pwd."\n");
        fclose($file);
        header("Location: login.php");
    }
?>
</body>
</html>