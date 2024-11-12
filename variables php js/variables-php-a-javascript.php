<?php
$usuarios=[
    [
        "id"=>0,
        "nombre"=>"Sam",
    ],
    [
        "id"=>1,
        "nombre"=>"Nat",
    ],
    [
        "id"=>2,
        "nombre"=>"Pedro",
    ],
];

$edad_de_pepito=23;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a JS</title>
</head>
<body>
    
<script>
// Json.Parse vuelve un string en un objeto json que puede manipular js
// json_encode en PHP que recibe un arreglo de php y lo convierte en un archivo json
let users = JSON.parse('<?=  json_encode($usuarios) ?>');
let edadDePepito = <?= $edad_de_pepito ?>;

</script>

<script src="./index.js"></script>
</body>
</html>