<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Código de Cita</title>
</head>
<body>
    <h1>Generador de Código de Cita</h1>
    <form method="post">
        <button type="submit" name="generarCodigo">Generar Código de Cita</button>
    </form>

    <?php
    // Función para generar un código aleatorio
    function generarCodigo() {
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $longitud = 8;
        $codigo = '';
        for ($i = 0; $i < $longitud; $i++) {
            $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $codigo;
    }

    if (isset($_POST['generarCodigo'])) {
        $codigoCita = generarCodigo();

        // Insertar el código generado en la base de datos
        $sql = "INSERT INTO citas (codigo) VALUES ('$codigoCita')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Su código de cita es: $codigoCita</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>
</html>