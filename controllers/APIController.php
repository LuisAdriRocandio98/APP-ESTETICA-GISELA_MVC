<?php

namespace Controllers;

use Model\Servicio;
use Model\CitaServicio;
use Model\Cita;

class APIController{
    public static function index(){
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar(){

        //Almacena la Cita y devuelve el ID
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();
        $id = $resultado['id'];

        // Almacena los servicios con el id de la cita
        $idServicios = explode(",", $_POST['servicios']);

        foreach($idServicios as $idServicio){
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];
            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();
        }

        //Retornamos una respuesta
       // $respuesta = [
         //   'resultado' => $resultado
        //];
        echo json_encode(['resultado' => $resultado]);
    }
}