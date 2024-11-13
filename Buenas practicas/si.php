<?php
$tabla_del_9=[];

for ($i=1; $i <= 10 ; $i++) { 
    $resultado= 9 * $i;
    $texto="9 x $i = $resultado";
    array_push($tabla_del_9,$texto);
}

// Forma pro de hacer debugging e organizar un var_dump o un print_r (el print_r es más legible y más bonito)
// echo "<pre>";
// print_r($tabla_del_9);
// echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Con buenas practicas</title>
</head>
<body>
    <h1>Tabla del 9 con kiwis</h1>

    <ul>
        <?php foreach( $tabla_del_9 as $resul) : ?>

        <li><?= $resul ?>🥝</li>

        <?php endforeach; ?>
    </ul>
</body>
</html>