<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <form action="login.php" method="post">
    <table>
        <tbody>
            <tr>
                <td colspan="2">
                    <h1 style="text-align: center;">LOG IN TO YOUR PROFILE</h1>
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
                    <input type="submit" name="Login" value="Login"/>
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
        // $hash_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $file = fopen("user_register1.txt","r");
        $found = false;
        while ($line = fgets($file) AND !$found) 
        {
            // echo $line."<br />";
            if (strcmp($line,$user."\n") == 0) 
            {
                $found = true;
                // echo $line;
            }
        }
        // echo $line;
        if($found) 
        {
            $hash = trim($line,"\n");
            if (password_verify($pwd,$hash)) 
            {
                // session_start();
                $_SESSION["username"] = $user;
                header("Location: conn.php");
                echo "Logged in Successfully!!!";
            }
            else 
            {
                echo "username or password incorrect!!!";
            }
        }
        else 
        {
            echo "username or password incorrect!!!";
        }
        
    }
    
?> 
</body>
</html>