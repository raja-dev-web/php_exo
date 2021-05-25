<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste d'équipe France 2021</h1>
    <?php
    $equipe = array(
        "Gardien"=> array('Hugo Lloris','Steve Mandanda',' Mike Maignan'),
        "Defenseurs"=> array('Benjamin Pavard','Léo Dubois','Raphael Varane', 'Kurt Zouma', 'Presnel Kimpembe', 'Clément Lenglet', 'Lucas Hernandez', 'Lucas Digne','Jules Koundé'),
        "Milieux" => array("N'Golo Kanté", 'Paul Pogba','Adrien Rabiot', 'Corentin Tolisso', 'Moussa Sissoko', 'Thomas Lemar'),
        "Attaquants" => array('Marcus Thuram', 'Kingsley Coman', 'Kylian Mbappé', 'Antoine Griezmann','Wissam Ben Yedder', 'Ousmane Dembélé') 
    );
    ?>
    <table>
        <thead>
            <th>For loop method 1</th>
            <!-- <th>For loop method 2</th> -->
        </thead>
        <tbody>
        <tr>
            <td>
                <ul>
                <?php
                   for ($i = 0;$i<count($equipe);$i++){
                    ?>
                       <li><?php echo $equipe[$i];?></li>
                       <ul>
                           <?php
                              foreach ($value as $players) {
                                  echo "<li>".$players."</li>";
                              }
                           ?>
                       </ul>
                       <?php      
                   }
                ?>
                </ul>
            </td>
            <!-- <td>
                
            </td> -->
        </tr>
        </tbody>
    </table>   
</body>
</html>