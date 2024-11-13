<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con imagenes</title>
</head>
<body>
    
    <form action="./server.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre">
        <br>
        <label for="image">image:</label>
        <input type="file" name="image" id="nombre">
        <br>
        <button type="submit">Enviar formulario🧁🍹🍩</button>
    </form>

</body>
</html>