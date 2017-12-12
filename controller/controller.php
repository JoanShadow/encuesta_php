<?php
/**
 * Created by PhpStorm.
 * User: joanp
 * Date: 12/12/2017
 * Time: 14:31
 */
include_once '../bd/dbc.php';
include_once '../model//data.php';

$data = new Data(
    $_POST['asunto'],
    $_POST['fecha'],
    $_POST['edad'],
    $_POST['sexo'],
    $_POST['opinion'],
    $_POST['color'],
    implode(',', $_POST['marcas'])
);

$data->createData();
print_r('Encuesta enviada con éxito !')

?>