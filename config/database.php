<?php
// EN DATABASE TENEMOS LOS DATOS DE CONEXIÓN A MYSQL

    // CLASE PARA CONECTARSE A LA BASE DE DATOS DE MYSQL
    class conectar{

        // PUBLIC: para que todos puedan acceder
        // STATIC: ya que trabajamos con la conexión
        // FUNCTION con el nombre de CONEXION, cuando llamemos la funcion conectaremos con la BBDD
        public static function conexion(){

            // VARIABLE CON LA CONEXION QUE VAMOS A CREAR
            // INSTANCIA DE CONEXION MYSQLI CON LOS PARAMETROS(DATOS DE LA CONEXIÓN
            // ("servidor o ip", "nombre usuario", "password", "nombre bbdd")
            $conexion = new mysqli("localhost", "root", "", "mvc");

            //COMO ES UNA FUNCIÓN, LA LLAMAMOS CON RETURN + nombre variable, PARA QUE NOS DEVUELVA ALGO
            return $conexion;
        }

    }


?>