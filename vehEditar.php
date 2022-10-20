<?php
    if($_POST){
        require "vehiculo.php";
        session_start();
        $vehiculos = $_SESSION["vehiculos"];

        $matricula = $_POST["matricula"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $color = $_POST["color"];
        $matriculaVieja = $_POST["matriculaVieja"];

        $posicion = 0;
        foreach($vehiculos as $vehiculo){
            if($matriculaVieja == $vehiculo->getMatricula()){
                $vehiculo->setMatricula($matricula);
                $vehiculo->setMarca($marca);
                $vehiculo->setModelo($modelo);
                $vehiculo->setColor($color);
                $vehiculos[$posicion] = $vehiculo; 
                break;
            }
            $posicion++;
        }

        $_SESSION["vehiculos"] = $vehiculos;
        header('Location: listaVehiculos.php');
    }
?>