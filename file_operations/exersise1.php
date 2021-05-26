<?php
    $equipe = array(
        "Gardien"=> array('Hugo Lloris','Steve Mandanda',' Mike Maignan'),
        "Defenseurs"=> array('Benjamin Pavard','Léo Dubois','Raphael Varane', 'Kurt Zouma', 'Presnel Kimpembe', 'Clément Lenglet', 'Lucas Hernandez', 'Lucas Digne','Jules Koundé'),
        "Milieux" => array("N'Golo Kanté", 'Paul Pogba','Adrien Rabiot', 'Corentin Tolisso', 'Moussa Sissoko', 'Thomas Lemar'),
        "Attaquants" => array('Marcus Thuram', 'Kingsley Coman', 'Kylian Mbappé', 'Antoine Griezmann','Wissam Ben Yedder', 'Ousmane Dembélé') 
    );
    foreach ($equipe as $poste => $player) 
    {
        // $filepath = "images/";
        $filename =  $poste.".txt";
        // echo $filename;
        $file = fopen($filename,'a');
        foreach ($player as $player) 
        {
            fputs($file,$player."\n");
        }
        fclose($file);
    }
    echo "Files Created.";
?>