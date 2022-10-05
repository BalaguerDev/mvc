<?php

    // CREAMOS METODO 
    function cargarControlador($controlador){

        $nombreControlador = ucwords($controlador)."Controller";
        $archivoControlador = "controllers/".ucwords($controlador).".php";

        // SI NO ES ARCHIVOCONTROLADOR 
        if(!is_file($archivoControlador)){
         
            $archivoControlador = "controllers/"."CONTROLADOR_PRINCIPAL".".php";
        }

        require_once $archivoControlador;

        $control = new $nombreControlador();
        return $control;
    }

    function cargarAccion($controller, $accion){

        if(isset($accion) && method_exists($controller, $accion)){

            $controller -> $accion();

        } else {

            $controllers -> ACCION_PRINCIPAL()
        }

    }1:12


