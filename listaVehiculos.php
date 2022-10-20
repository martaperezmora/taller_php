<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista vehiculos</title>
</head>
<body>
    <h1>Taller</h1>
    <h2>Lista vehículos</h2>
    <section>
        <a href="vehNuevo.html">nuevo vehículo</a>
        <a href="vehBorrarTodos.php">eliminar todos</a>
        <br>
        <table border="5px">
            <tr>
                <th>Matricula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Revisado</th>
                <th></th>
            </tr>
            <?php
                require "vehiculo.php";
                session_start();
                
                $vehiculos = $_SESSION["vehiculos"];

                    foreach($vehiculos as $vehiculo){
                        echo "<tr>
                                <td>".$vehiculo->getMatricula()."</td>
                                <td>".$vehiculo->getMarca()."</td>
                                <td>".$vehiculo->getModelo()."</td>
                                <td>".$vehiculo->getColor()."</td>
                                <td>".$vehiculo->getRevisado()."</td>
                                <td>
                                    <a href='vehRevisar.php?matricula=".$vehiculo->getMatricula()."'>revisar</a>
                                    <a href='vehMod.php?matricula=".$vehiculo->getMatricula()."'>editar</a>
                                    <a href='vehBorrar.php?matricula=".$vehiculo->getMatricula()."'>eliminar</a>
                                </td>
                            </tr>";
                    } 
            ?>
        </table>
    </section>
</body>
</html>