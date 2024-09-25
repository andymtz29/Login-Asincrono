<?php
session_start();
//if (isset($_SESSION['usuario'])) {
    //header("location:index.php");
//}



if ($_POST) {

    if (isset($_POST['nombre']) && !empty($_POST['nombre']) && 
        isset($_POST['apellido']) && !empty($_POST['apellido']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['pass']) && !empty($_POST['pass'])) {
        

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $_SESSION['registro'] = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "email" => $email,
            "pass" => $pass
        ];

        echo json_encode([1, "Registro exitoso"]);
    } else {

        echo json_encode([0, "Faltan datos. Por favor, completa todos los campos."]);
    }
}
?>
