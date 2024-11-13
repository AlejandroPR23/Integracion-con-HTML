<?php

$is_float = filter_var("1.9", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

$is_int=filter_var("2",FILTER_VALIDATE_INT);

$is_ip=filter_var("128.0.0.0",FILTER_VALIDATE_IP);

$is_URL=filter_var("perro.com",FILTER_VALIDATE_URL);

$is_email=filter_var("No es un email", FILTER_VALIDATE_EMAIL);

echo "<pre>";
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_URL);
var_dump($is_email);
echo "</pre>";
