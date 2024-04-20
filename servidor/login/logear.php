<?php session_start();
    include "../../clases/Auth.php";
    $usuario = $_POST['nombre'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if ($Auth->logear($usuario, $password)) {
        header("location:/agenda.php");
    } else {
        echo "No se pudo logear";
    }

?>