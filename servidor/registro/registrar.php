<?php 
    include "../../clases/Auth.php";

    $usuario = $_POST['nombre'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $Auth = new Auth();

    if ($Auth->registrar($usuario, $password)) {
        header("location:../../login.php");
    } else {
        echo "No se pudo registrar";
    }

?>