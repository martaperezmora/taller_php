<?php
        session_start();
        require "vehiculo.php";
        
        if($_POST){
            
            $matricula = $_POST["matricula"];
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $color = $_POST["color"];

            $vehiculo = new vehiculo($matricula,$marca,$modelo,$color); 

            $vehiculos = $_SESSION["vehiculos"];            
 
            array_push($vehiculos,$vehiculo);           

            $_SESSION["vehiculos"] = $vehiculos;            

            header('Location: listaVehiculos.php');
            
        }
    ?>