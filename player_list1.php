<?php
require "playerslist.php";
if(isset($_GET['poste']))
{
    $types = htmlspecialchars($_GET['poste']);
?>
    <h1>Liste des equipe <?php echo $types; ?> France 2021</h1>
<?php
    
    if (isset($equipe[$types])) 
    {
        $playerslists = $equipe[$types];
?>
    <ul>
<?php
    foreach ($playerslists as $players) 
    {
        echo "<li>".$players."</li>";
    }
?>
    </ul>
<?php
    }
    else 
    {
        echo "This post is not exists.";
    }
}
else 
{
    echo "No post choosed";
}
?>