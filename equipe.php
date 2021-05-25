<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR LOOP</title>
    <style>
        table, th, td 
        {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Liste d'équipe France 2021</h1>
    <?php
    $equipe = array('Hugo Lloris','Steve Mandanda',' Mike Maignan','Benjamin Pavard','Léo Dubois',
    'Raphael Varane', 'Kurt Zouma', 'Presnel Kimpembe', 'Clément Lenglet', 'Lucas Hernandez', 'Lucas Digne',
    'Jules Koundé', "N'Golo Kanté", 'Paul Pogba','Adrien Rabiot', 'Corentin Tolisso', 'Moussa Sissoko',
    'Thomas Lemar', 'Marcus Thuram', 'Kingsley Coman', 'Kylian Mbappé', 'Antoine Griezmann','Wissam Ben Yedder',
    'Ousmane Dembélé');
    ?>
    <table>
        <thead>
            <th>For loop method 1</th>
            <th>For loop method 2</th>
        </thead>
        <tbody>
        <tr>
            <td>
                <ul>
                <?php
                    for ($i=0; $i < count($equipe) ; $i++) 
                    { 
                        echo "<li>".$equipe[$i]."</li>";
                    }
                ?>
                </ul>
            </td>
            <td>
                <ul>
                <?php
                    foreach ($equipe as $joueurs) 
                    {
                        echo "<li>".$joueurs."</li>";
                    }
                ?>
                </ul>
            </td>
        </tr>
        </tbody>
    </table>   
</body>
</html>