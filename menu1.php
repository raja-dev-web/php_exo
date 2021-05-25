<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <?php
            require "playerslist.php";
            $keys = array_keys($equipe);
            foreach ($keys as $posts) 
            {
            ?>
                <a href="menu1.php?poste=<?php echo $posts; ?>"><button type="button"><?php echo strtoupper($posts) ; ?></button></a>
        <?php
            }
        ?>
    </nav>
    <br><hr><br>
    <?php
        require "player_list1.php";
    ?>
</body>
</html>