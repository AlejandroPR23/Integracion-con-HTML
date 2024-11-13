<?php

require("./vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;



function sendMail($subject, $body, $email, $name, $html = false)
{
    // Looking to send emails in production? Check out our Email API/SMTP product!
    // Looking to send emails in production? Check out our Email API/SMTP product!
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '6fa3c6e511985b';
    $phpmailer->Password = '7657036bf02df9';

    // Añadiendo destinatarios
    $phpmailer->setFrom('contact@miempresa.com', 'Miempresa');
    $phpmailer->addAddress($email, $name);

    // Contenido de mi email

    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body = $body;

    // mandar correo
    $phpmailer->send();
}