<?php

class verNumero{

    public function __construct() {
    }
    public function numPositivoNegativo($datos){
        $num = $datos["numero"];
        if($num > 0){
            $mensaje = "El numero $num es positivo";
        }elseif($num < 0){
            $mensaje = "El $num es negativo"; 
        }else{
            $mensaje = "El numero $num es cero";
        }
        return $mensaje;
    }
}