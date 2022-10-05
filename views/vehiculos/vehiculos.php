<?php
// VIEWS/VEHICULOS/VEHICULOS.PHP CONFIGURAMOS LO QUE MOSTRARA EN EL INDEX


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
</head>
<body>
    <h2><?php echo  $data ["titulo"]; ?></h2>

    <a href="">Añadir</a>
    <br><br>
    <table border ="1" width ="80%">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
            </tr>
        </thead>

        <tbody>
        <?php 
        foreach ($data ["vehiculos"] as $datoVehiculo){

            echo "<tr>";
                echo "<td>".$datoVehiculo["placa"]."</td>";
                echo "<td>".$datoVehiculo["marca"]."</td>";
                echo "<td>".$datoVehiculo["modelo"]."</td>";
                echo "<td>".$datoVehiculo["año"]."</td>";
                echo "<td>".$datoVehiculo["color"]."</td>";
            echo "</tr>";

        }; 
        ?>

        </tbody>

    </table>
    
</body>
</html>