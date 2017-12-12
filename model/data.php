<?php
/**
 * Created by PhpStorm.
 * User: joanp
 * Date: 12/12/2017
 * Time: 15:46
 */
include_once '../bd/dbc.php';

class Data extends DBC{

    function __construct($asunto, $fecha, $edad, $sexo, $opinion, $color, $marcas) {
        parent::__construct();
        $this->type = "data";

        $this->asunto = $asunto;
        $this->fecha = $fecha;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->opinion =$opinion;
        $this->color = $color;
        $this->marcas = $marcas;
    }

    public function getData() {

        return json_encode(
            [
                ('asunto') => $this->asunto,
                ('fecha') => $this->fecha,
                ('edad') => $this->edad,
                ('sexo') => $this->sexo,
                ('opinion') => $this->opinion,
                ('color') => $this->color,
                ('marcas') => $this->marcas
            ]
        );
    }

    public function createData() {

        return $this->insertData(
            'data',
            '_id, asunto, fecha, edad, sexo, opinion, color, marcas',
            "null, '$this->asunto', '$this->fecha', '$this->edad', '$this->sexo', '$this->opinion', '$this->color', '$this->marcas'"
        );
    }
}

?>