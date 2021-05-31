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
        $bdd = new PDO("mysql:host=localhost; dbname=school; charset=utf8", "root", "");
        if ($bdd) 
        {
            echo "Connection Established correctly!!!<br/><br /><hr>";
            
?>
        <table class="table">
            <thead>
                <th class="thead">ID</th>
                <th class="thead">TITLE_NAME</th>
                <th class="thead">CONTENT</th>
                <th class="thead">FILE PATH</th>
                <th class="thead">ACTION</th>
            </thead>
            <tbody>
                <?php 
                    $reponse = $bdd->query("SELECT * FROM article");           
                    while ($data = $reponse->fetch()) 
                    {
                ?>
                        <tr class="tr">
                            <td class="td"><?php echo htmlspecialchars($data['id']);?></td>
                            <td class="td"><?php echo htmlspecialchars($data['titre']);?></td>
                            <td class="td"><?php echo htmlspecialchars($data['contenu']);?></td>
                            <td class="td"><img alt="profile_pic" src=<?php echo $data['file_path']; ?> /></td>
                            <td><a href="update_id.php?id=<?php echo htmlspecialchars($data['id']); ?>"><button type="button">Update</button></a></td>
                            <td><a href="delete_id.php?id=<?php echo htmlspecialchars($data['id']); ?>"><button type="button">Delete</button></a></td>
                        </tr">
                    <?php
                    }
                    ?>
            </tbody>
        </table>
        <?php
        }
        ?>
</body>
</html>