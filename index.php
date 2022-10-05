<?php
//TRAEMOS TODOS LOS SCRIPTS PARA VISUALIZAR LA PANTALLA PRINCIPAL

    require_once "config/config.php"; 
    require_once "core/routes.php"; 
    require_once "config/database.php";
    require_once "controllers/vehiculos.php";


    // DETECTAMOS SI EN LA URL HAY ALGUN TIPO DE PARAMETRO PARA REDIRECCIONAR A LA PAGINA QUE DESEE EL USUARIO
    // $_GET PORQUE LO ESTAMOS TRABAJANDO POR LA URL

    // SI ENCUENTRA UNA "C" //ASOCIAMOS VAR CONTROLADOR A "C"
    if(isset($_GET["c"])){

        $controlador = cargarControlador($_GET["c"]);

    } else {


     }














/*     // CREAMOS OBJETO Y IGUALAMOS A LA CLASS VEHICULOSCONTROLLER DE CONTROLLERS
    // TRAEMOS EL METODO INDEX
    $control = new vehiculosController();
    $control -> index(); */


?>