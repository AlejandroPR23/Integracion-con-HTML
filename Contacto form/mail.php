<?php

require("./vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;



function sendMail($subject, $body, $email, $name, $html = false)
{
    // Looking to send emails in production? Check out our Email API/SMTP product!
    // Looking to send emails in production? Check out our Email API/SMTP product!
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure= PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'phpmailprueba868@gmail.com';
    $phpmailer->Password = 'gioy uqmv ddub xfje';

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