<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<form action="" method="GET">

Largeur: <input type="text" name="largeur">
Hauteur: <input type="text" name="hauteur">
<button>Valider</button>

<?php

function calculPerimetreRectangle(){
    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];
    $perimetre = 2 * ($largeur + $hauteur);

    return $perimetre;
}

echo 'Périmètre rectangle: '.calculPerimetreRectangle();

?>

</form>
    
</body>
</html>
