<?php

// EN VEHICULOSCONTROLLER MOSTRAREMOS LA VISTA PRINCIPAL
    class vehiculosController{

        public function index(){

            // TRAEMOS LA INFO DEL ARCHIVO MODELS/VEHICULOSMODEL
            require_once "models/vehiculosModel.php";

            // CREAMOS UN OBJETO DE LA CLASE VEHICULOSMODEL Y LA IGUALAMOS A LA VARIABLE VEHICULOS
            $vehiculos = new vehiculosModel();

            // ARRAY "DATA" CON UN INDICE "TITULO" CON VALOR VEHICULOS
            // LLAMAMOS EL METODO QUE NOS MOSTRARA EL CATALOGO DE TODOS LOS VEHICULOS
        
            $data ["titulo"] = "Vehiculos";
            $data ["vehiculos"] = $vehiculos -> get_vehiculos();

            require_once "views/vehiculos/vehiculos.php";
        }


        // ESTE METODO NOS AYUDARA MOSTRANDONOS LA VISTA
        public function nuevo(){

            $data ["titulo"] = "Vehiculos";

            require_once "views/vehiculos/vehiculosNuevo.php";
        }

    }


?>