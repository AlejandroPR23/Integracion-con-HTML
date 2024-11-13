<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con imagenes</title>
</head>

<body>

    <form action="./server.php" method="post" enctype="multipart/form-data">
        <!-- Input simple -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre">

        <br>

        <!-- Arreglos -->
        <label for="personas">Personas:</label>
        <input type="text" name="personas[]" placeholder="Ingresa el nombre de una persona">
        <br>
        <input type="text" name="personas[]" placeholder="Ingresa el nombre de una persona">
        <br>
        <input type="text" name="personas[]" placeholder="Ingresa el nombre de una persona">
        <br>



        <!-- Arreglos asociativos -->
        <label>Persona:</label>
        <input type="text" name="persona[nombre]" placeholder="Ingresa el nombre de la persona">
        <br>
        <input type="email" name="persona[email]" placeholder="Ingresa el email de la persona">
        <br>
        <input type="number" name="persona[edad]" placeholder="Ingresa la edad de la persona">
        <br>

        <!-- Checkbox -->
        <input type="checkbox" name="list1" value="Este valor fue clickeado">
        <input type="checkbox" name="list2">
        <input type="checkbox" name="list3">
        <br>

        <!-- Radios -->
        <label for="Mexico">Mexico</label>
        <br>
        <input type="radio" name="pais" value="Mexico" id="Mexico">
        <br>

        <label for="Colombia">Colombia</label>
        <br>
        <input type="radio" name="pais" value="Colombia" id="Colombia">
        <br>

        <label for="Peru">Peru</label>
        <br>
        <input type="radio" name="pais" value="Peru" id="Peru">
        <br>


        <!-- Multiples archivos -->
        <label for="galeria">Carga tus imagenes</label>
        <br>
        <input type="file" name="galeria[]" id="galeria" multiple>
        <br>
        <button type="submit">Enviar formulario🧁🍹🍩</button>
    </form>

</body>

</html>