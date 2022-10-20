<?php
    require "vehiculo.php";
    session_start();
    
    if($_GET){
        $vehiculos = $_SESSION["vehiculos"];
        $matricula = $_GET["matricula"];

        $posicion = 0;
        $borrado = false;
        foreach($vehiculos as $vehiculo){

            if($matricula == $vehiculo->getmatricula()){
                $borrado = true;    
                                 
            }

            if($borrado){              
                if($vehiculos[$posicion+1] != null){
                    $vehiculos[$posicion] = $vehiculos[$posicion+1]; 
                }
            }
            
            $posicion++;
        }

        unset($vehiculos[$posicion-1]);  

        $_SESSION["vehiculos"] = $vehiculos;
        header('Location: listaVehiculos.php');
    }
    
?>