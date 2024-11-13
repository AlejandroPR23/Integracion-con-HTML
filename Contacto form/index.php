<?php
require "./mail.php";
function validate($name, $email, $subject, $message,$form)
{
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if (isset($_POST['form'])) {

    if (validate(...$_POST)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $body="$name <$email> te envia el siguiente mensaje<br>
        $message";

        sendMail($subject,$body,$email,$name,true);
        
        $status = "success";
    } else {
        $status = "danger";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario contacto</title>
</head>

<body>

    <?php if ($status == "danger"): ?>

        <div class="alert danger">
            <span>Hubo un problema</span>
        </div>

    <?php endif; ?>


    <?php if($status == "success") : ?>

        <div class="alert success">
            <span>Se envio con exito</span>
        </div>

    <?php endif; ?>



    <form action="./" method="post">
        <h1>Contactanos</h1>

        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="subject">Asunto:</label>
            <input type="text" name="subject" id="subject">
        </div>

        <div class="input-group">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div class="button-container">
            <button name="form" type="submit"> Enviar</button>
        </div>

        <div class="contact-info">
            <div class="info">
                <span> 13 Medellin Poblado</span>
            </div>

            <div class="info">
                <span>+57 31235512414</span>
            </div>
        </div>
    </form>
</body>

</html>