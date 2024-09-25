<?php
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //dar respuestas en formato json, forma de intercambiar datos
    //devuelve ambos ob y arreglos, notacion objeto java script
    echo json_encode("Hola tu email es: ".$email . " y tu password es:".$pass);
?>