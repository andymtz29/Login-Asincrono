

<?php 
require_once "./app/config/dependencias.php";

session_start();
//pregunta si existe la variable usuario para mandarte a donde estas sin que regrese a registro
if (isset($_SESSION['usuario'])) {
    //header("location:index.php");
    //exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=JS."bootstrap.bundle.min.js";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <link rel="stylesheet" href="<?=CSS."main.css";?>">
    <title>Formulario de datos</title>

</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
<form action="./login.php" method="post" class="w-25 p-4 border rounded shadow-sm bg-light mx-auto mt-5">
    <div class="text-center mb-4">
        <i class="bi bi-person-circle fs-1 text-primary"></i>
    </div>
    
    <h3 class="text-center mb-4">Iniciar Sesión</h3>

    <div class="input-group mt-3">
        <i class="bi bi-envelope-fill input-group-text fs-4 text-muted"></i>
        <input type="text" class="form-control" placeholder="Ingrese su email" id="email" name="email" value="<?= (!empty($_POST['email'])) ? $_POST['email'] : ''; ?>">
    </div>

    <div class="input-group mt-3">
        <i class="bi bi-lock-fill input-group-text fs-4 text-muted"></i>
        <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="pass" name="pass" value="<?= (!empty($_POST['pass'])) ? $_POST['pass'] : ''; ?>">
    </div>

    <div class="mt-4">
        <button id="btn-saludar" type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
    </div>

    <div class="mt-4 d-flex justify-content-center">
        <a href="./registro_vista.php" class="text-dark">¿No tiene una cuenta? Regístrate</a>
    </div>
</form>

    <script src="./public/js/main.js"></script>
</body>
</html>

