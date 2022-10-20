<?php

    require "vehiculo.php";
    session_start();
    if($_GET){
        $vehiculos = $_SESSION["vehiculos"];
        $matricula = $_GET["matricula"];

        $posicion = 0;
            foreach($vehiculos as $vehiculo){
                if($matricula == $vehiculo->getMatricula()){
                    $estado = $vehiculo->getRevisado();
                    if($estado == 'N'){
                        $vehiculo->setRevisado('S');
                    } else {
                        $vehiculo->setRevisado('N');
                    }
                    $vehiculos[$posicion] = $vehiculo; 
                    break;
                }
                $posicion++;
            }

            $_SESSION["vehiculos"] = $vehiculos;

            header('Location: listaVehiculos.php');
    }

?>