<?php
$se_hablo_de_bruno = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales en PHP</title>
</head>

<body>
    <!-- No es correcto hacer esto: -->
    <h1> NO hacer</h1>
    <?php
    if ($se_hablo_de_bruno) {
        echo "<p> 🍮🍮🧉🧃🥛</p>";
    } else {
        echo "<p>🥩🍗🍖🥪🌮 </>";
    }
    ?>


    <!-- Esto es aceptable: -->
    <h1>Algo aceptable</h1>
    <?php if ($se_hablo_de_bruno) { ?>
        <p> 🍮🍮🧉🧃🥛</p>
    <?php } else { ?>
        <p>🥩🍗🍖🥪🌮 </>
        <?php } ?>


    <h1>La mejor forma, deberias hacerlo</h1>
    <?php if ($se_hablo_de_bruno): ?>
        <p> 🍮🍮🧉🧃🥛</p>
    <?php else: ?>
        <p>🥩🍗🍖🥪🌮 </>
    <?php endif; ?>
    
</body>

</html>