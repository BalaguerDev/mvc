<?php
// EN VEHICULOSMODEL CREAREMOS LOS MODELOS DE LOS COCHES

    class vehiculosModel{

        // DECLARAMOS VARIABLE PRIVATE YA QUE SOLO LA UTILIZAREMOS EN ESTA CLASE
        private $db;                //BBDD
        private $vehiculos;         //VEHICULOS



        // METODO __construct SIEMPRE SE EJECUTA CUANDO HAGAS UNA INSTANCIA DE LA CLASE (no necesario llamarlo)
        // AL MOMENTO DE HACER LA INSTANCIA CREAMOS LA CONEXION CON MYSQL
        public function __construct(){

            // LLAMAMOS A NUESTRA VARIABLE DB Y LA IGUALAMOS A LA CLASE CONECTAR DE DATABASE
            // ::TRAEMOS LA CLASE CONECTAR Y EL METODO CONEXIÓN Y ASI NOS RETORNE LA CONEXION A MYSQL
            $this -> db = conectar::conexion();            
            $this -> vehiculos = array();
        }



        // CREAMOS NUEVO METODO QUE CARGARA EL CATALOGO DE TODA LA TABLA DE VEHICULOS
        public function get_vehiculos(){

            // VARIABLE QUE SELECCIONARA TODA LA TABLA DE (nombre tabla) "vehiculos"
            $sql = "SELECT * FROM vehiculos";

            // VARIABLE IGUALADA A CONECX CON MYSQL Y FUNCION QUERY PARA EJECUTAR CONSULTA ($sql)"los vehiculos"
            $resultado = $this -> db ->query($sql);

            // AL TENER EL RESULTADO LO EXTRAEMOS CON UN BUCLE WHILE
            // AGREGARA EN CADA INDICE UNA NUEVA FILA HASTA QUE SE TERMINE LA TABLA
            //DEVOLVEMOS EL RESULTADO
            while($row = $resultado ->fetch_assoc()){
                $this -> vehiculos [] = $row;
            }
            // DEVOLVEMOS EL VALOR
            return $this -> vehiculos;
        }


        // FUNCION PARA OBTENER LOS VALORES QUE INSERTEMOS EN LA TABLA
        public function insertar($placa, $marca, $modelo, $año, $color){

            // INSERCCION A LA BASE DE DATOS DE UN VEHICULO
            $resultado = $this -> db ->query("INSERT INTO vehiculos (placa, marca, modelo, año, color) VALUES ('$placa', '$marca', '$modelo', '$año', '$color')");

        }
    }




?>