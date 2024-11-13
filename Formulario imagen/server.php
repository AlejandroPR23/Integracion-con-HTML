<?php
$basename = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];
$ruta_a_subir = "images/$basename";

move_uploaded_file($image,$ruta_a_subir);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen</title>
</head>
<body>
    <img src="<?= $ruta_a_subir ?>" alt="TaskMaster">
</body>
</html>