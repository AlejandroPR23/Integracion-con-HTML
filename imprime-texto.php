<?php
$nombre="Salmon";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>
    <!-- Una manera de mostrar codigo PHP en HTML -->
    <?php
    echo "<b>Hola mama estoy aprendiendo a integrar PHP con HTMl </b>";
    ?>

    <!-- Otra manera de hacerlo -->
     <?= "<i>esta es otra forma de imprimir texto y etiquetas con php</i>" ?>

     <h1> hola <?= $nombre ?></h1>

     <?= "Crear un snippet para autocompletar las etiquetas de php:{
	// Place your snippets for html here. 
	'php': {
	  'prefix': 'php',
	  'body': ['<?php', '$0', '?>'],
	  'description': 'php tag'
	}
  }" ?>
</body>
</html>