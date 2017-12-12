<?php
/**
 * Created by PhpStorm.
 * User: joanp
 * Date: 12/12/2017
 * Time: 14:15
 */

class DBC {

    public $conexion;

    function __construct(){

        $db_host = "localhost";
        $db_nombre = "encuesta";
        $db_usuario = "root";
        $db_password = "";

        $this->conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

        if($this->conexion->connect_error){
            die("Ha habido un fallo en la conexión" . $this->conexion->connect_error);
        }
    }

    /*---inserta campo en tabla, pasandole como parametros, tabla, columna y datos---*/
    public function insertData($table, $column, $data) {

        $dataAdd = "INSERT INTO $table($column) VALUES ($data)";
        $con_data = $this->conexion->query($dataAdd);

        if(!$con_data) {
            mixed: http_response_code (500);
        }else {
            return $con_data;
        }
    }
}

?>