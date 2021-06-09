<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet"> -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        /* .table, .thead, .tr, .td 
        {
            border: 1px solid black;
        } */
        .thead, .tr, .td
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
        <table class="table table-bordered" id="dataTable" cellspacing="0">
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
                            <td class="td"><img alt="profile_pic" src=<?php echo $data['file_path']; ?> width="400" height="300"/></td>
                            <td class="td"><a href="update1.php?id=<?php echo htmlspecialchars($data['id']); ?>"><button type="button">Update</button></a>
                            <a href="delete_id.php?id=<?php echo htmlspecialchars($data['id']); ?>"><button type="button">Delete</button></a></td>
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
        <?php
        }
        ?>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


</body>
</html>