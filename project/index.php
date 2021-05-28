<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <style>
        table, th, tr, td 
        {
            border: 1px solid black;
        }
        td
        {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
//  $host_name = "localhost";
//  $db_name = "school";
//  $user_name = "root";
//  $password = "";
//  $conn = new PDO("mysql:host=$host_name; dbname=$db_name", $user_name, $password);
//  if( $conn ) {
//      echo "Connection established.<br />";
// }else{
//      echo "Connection cannot be able to establish.<br />";
//      die( print_r( mysql_errors(), true));
// }
    $bdd = new PDO("mysql:host=localhost; dbname=school; charset=utf8", "root", "");
    if ($bdd) 
    {
        echo "Connection Established correctly!!!<br/><br />";
        $reponse = $bdd->query('SELECT * FROM article');
        
?>
            <table>
                <thead>
                    <th>ID</th>
                    <th>TITLE_NAME</th>
                    <th>CONTENT</th>
                </thead>
                <tbody>
        <?php            
                while ($data = $reponse->fetch()) 
        {
            ?>
                <tr>
                    <td><?php echo $data['id'];?></td>
                    <td><?php echo $data['titre'];?></td>
                    <td><?php echo $data['contenu'];?></td>
                </tr>
        <?php
        }
        ?>
                </tbody>
            </table>
<?php
        
        $reponse->closeCursor();
    }
    else 
    {
        echo "Connection cannot be able to establish.";
       
    }
    $bdd=null;
?>
</body>
</html>