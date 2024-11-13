<?php

if(isset($_POST['Nombre']) && !empty($_POST['Nombre'])){
    echo "Hola ".$_POST['Nombre'];
}else {
    echo "No enviaste nada 😐😡🤡";
}

if(isset($_POST['form'])){
    echo "Todo el formulario fue enviado";
}else{
    echo "No se envio nada 😑";
}