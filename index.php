<?php
    require "vehiculo.php";
    session_start();

    if (!isset($_SESSION['vehiculos'])) {
        $_SESSION["vehiculos"] = array();
        $vehiculos = $_SESSION["vehiculos"];
        array_push($vehiculos, new vehiculo("1234ABC","Seat","Leon","Blanco"));  

        $_SESSION["vehiculos"] = $vehiculos;
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio - taller</title>
</head>
<body>
    <h1>Taller</h1>
    <h2>Inicio</h2>
    <a href="listaVehiculos.php">vehículos</a>
</body>
</html>