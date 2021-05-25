<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $equipe = array(
    "Gardien"=> array('Hugo Lloris','Steve Mandanda',' Mike Maignan'),
    "Defenseurs"=> array('Benjamin Pavard','Léo Dubois','Raphael Varane', 'Kurt Zouma', 'Presnel Kimpembe', 'Clément Lenglet', 'Lucas Hernandez', 'Lucas Digne','Jules Koundé'),
    "Milieux" => array("N'Golo Kanté", 'Paul Pogba','Adrien Rabiot', 'Corentin Tolisso', 'Moussa Sissoko', 'Thomas Lemar'),
    "Attaquants" => array('Marcus Thuram', 'Kingsley Coman', 'Kylian Mbappé', 'Antoine Griezmann','Wissam Ben Yedder', 'Ousmane Dembélé') 
    );  
    if (isset($_POST["Gardien"])) 
    {
    ?>
    <ul>
        <?php
        // echo $equipe[$gardien];
        // $joueurs = $equipe[$gardien];
        // echo $joueurs;
            foreach ($equipe as $key => $value) {
                if($key == "Gardien")
                {
                    echo "Liste de ".$key."pour 2021 <br /><br />";
                    foreach($value as $players) 
                    {
                        echo "<li>".$players."</li>";
                    }
                }
            }
        ?>
    </ul>
    <?php 
    } 
    if (isset($_POST["Defenseurs"])) 
    {
    ?>
    <ul>
        <?php
            foreach ($equipe as $key => $value) {
                if($key == "Defenseurs")
                {
                    echo "Liste d'equipe ".$key." France pour 2021 <br /><br />";
                    foreach($value as $players) 
                    {
                        echo "<li>".$players."</li>";
                    }
                }
            }  
        ?>
    </ul>
    <?php 
    } 
    if(isset($_POST["Milieux"])) 
    { 
    ?>
    <ul>
        <?php
            foreach ($equipe as $key => $value) {
                if($key == "Milieux")
                {
                    echo "Liste d'equipe ".$key." France pour 2021 <br /><br />";
                    foreach($value as $players) 
                    {
                        echo "<li>".$players."</li>";
                    }
                }
            }
        ?>
   </ul>
    <?php 
    } 
    if (isset($_POST["Attaquants"])) 
    {
    ?>
    <ul>
        <?php
            foreach ($equipe as $key => $value) {
                if($key == "Attaquants")
                {
                    echo "Liste d'equipe ".$key." France pour 2021 <br /><br />";
                    foreach($value as $players) 
                    {
                        echo "<li>".$players."</li>";
                    }
                }
            }
        ?>
   </ul>
    <?php
     }
    ?>
</body>
</html>