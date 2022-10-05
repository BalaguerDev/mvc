<?php
// VIEWS/VEHICULOS/VEHICULOS.PHP CONFIGURAMOS LO QUE MOSTRARA EN EL INDEX


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php // echo  $data ["titulo"]; ?></title>
</head>
<body>
    <h2> <?php // echo  $data ["titulo"]; ?></h2>

    <br><br>

    <form id="nuevo" name="nuevo" method="POST" action="" autocomplete="off">

        Placa: <input type="text" id="placa" name="placa"><br>
        Marca: <input type="text" id="marca" name="marca"><br>
        Modelo: <input type="text" id="modelo" name="modelo"><br>
        Año: <input type="text" id="año" name="año"><br>
        Color: <input type="text" id="color" name="color"><br>

        <button id="guardar" name="guardar" type="submit">Guarar</button>
    </form>
    
</body>
</html>