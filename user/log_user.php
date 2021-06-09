<?php
    require "log.php";
    // session_start();
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
    
<br><hr><br>
<div>
    <!-- <h1>Registration Form</h1><br><hr><br> -->
    <form action="log.php" method="post">
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
                <td>
                    <input type="hidden" id="token" name="token" value="<?php echo $token; ?>"/><br />
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
</body>
</html>