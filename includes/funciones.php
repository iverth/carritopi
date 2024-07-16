<?php

function depurar($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit;
}

function crearMensajeResultado($exito = false, $mensaje = "", $data = [] ){
    $resultado = [
        "exito" => $exito,
        "mensaje" => $mensaje,
        "data" => $data
    ];
    return $resultado;
}