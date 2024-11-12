<?php
$usuarios = ["Salmon", "Nataniel", "Ratamaster", "Vel"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en HTML con PHP</title>
</head>

<body>

    <ul>
        <h1>Ciclo for</h1>
        <!-- Ciclo for -->
        <?php for ($i = 0; $i < 10; $i++): ?>

            <li><?= $i . "🍹" ?></li>

        <?php endfor; ?>

        <?php $i = 0 ?>

        <h1>Ciclo while</h1>
        <!-- Ciclo while -->
        <?php while ($i < 5): ?>

            <li>Cualquier cosa <?= $i += 1 ?></li>

        <?php endwhile; ?>
    </ul>
    <!-- Ciclo foreach -->
    <h1>Lista de usuarios</h1>
    <h2>Ciclo foreach</h2>
    <ul>
        <?php foreach ($usuarios as $usuario): ?>
            <li> <?= $usuario ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>