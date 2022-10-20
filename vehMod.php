<?php
        
        if($_GET){
            require "vehiculo.php";
            session_start();
            
            $matricula = $_GET["matricula"];

            $vehiculos = $_SESSION["vehiculos"];

            foreach($vehiculos as $vehiculo){
                if($matricula == $vehiculo->getMatricula()){
                    $vehSeleccionado = $vehiculo;   
                }
            }
        }
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar vehiculo</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <section>
        <form action="vehEditar.php" method="post">
        <label for="matricula">Matricula: </label>
            <input type="text" name="matricula" id="matricula" value="<?php echo $vehSeleccionado->getMatricula() ?>" required autofocus>
            <input type="hidden" name="matriculaVieja" value="<?php echo $matricula ?>">
            <br>
            <label for="autor">Marca: </label>
            <input type="text" name="marca" id="marca" value="<?php echo $vehSeleccionado->getMarca() ?>" required>
            <br>
            <label for="autor">Modelo: </label>
            <input type="text" name="modelo" id="modelo" value="<?php echo $vehSeleccionado->getModelo() ?>" required>
            <br>
            <label for="color">Color: </label>
            <input type="text" name="color" id="color" value="<?php echo $vehSeleccionado->getColor() ?>" required>
            <br>
            <input type="submit" value="editar">
        </form>
    </section>
</body>
</html>