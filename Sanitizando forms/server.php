<?php

$name= $_POST["Nombre"];
$username= $_POST["Username"];
$email= $_POST["Email"];
$edad= $_POST["Edad"];

// Convierte todo  lo enviado por el usuario si es html en un string
$htmlentities=htmlentities($name);

// Escapar \ signos como comillas
$addslashes=addslashes($username);

// Para evitar que por ejemplo en strings se envien tambien numeros
$onlywords= preg_replace("/\d/","",$username);

// Para evitar que se envien letras con enteros
$onlynumbers= preg_replace("/\D/","",$username);

$email= filter_var($email,FILTER_SANITIZE_EMAIL);
$edad= filter_var($edad,FILTER_SANITIZE_NUMBER_INT);



