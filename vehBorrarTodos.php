<?php
    require "vehiculo.php";
    session_start();

    $vehiculos = $_SESSION["vehiculos"];
    $vehiculos = array();
    $_SESSION["vehiculos"] = $vehiculos;
    header('Location: listaVehiculos.php');
?>