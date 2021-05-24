<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border: 1px solid black;
}</style>
</head>

<body>
<?php
$cars = array(
    array(
        "name"=>"Urus", 
        "type"=>"SUV", 
        "brand"=>"Lamborghini"
    ),
    array(
        "name"=>"Cayenne", 
        "type"=>"SUV", 
        "brand"=>"Porsche"
    ),
    array(
        "name"=>"Bentayga", 
        "type"=>"SUV", 
        "brand"=>"Bentley"
    ),
);
?>

    <table class="table table-bordered">
        <thead>
            <tr>
            <th>Nom</th>
            <th>Type</th>
            <th>Brand</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($cars as $elements) {
            ?>
            <tr>
                <?php
                    foreach ($elements as $value) {
                ?>
                <td> <?php echo $value; ?> </td>
                <?php
                    }
                ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>