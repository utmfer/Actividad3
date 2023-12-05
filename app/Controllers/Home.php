<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

//Respuesta tipo Array

    public function ProductosLimpieza (){

        $producto= array (
            "ID" => "00021",
            "nombre" => "Pinoclin",
            "Precio" => "0.50"
        );

        return $this->response->set.Json($producto);

    }

//Respuesta tipo Lista

    public function ProductosLimpiezaLista()   {
        $productos = [
            [
                "ID" => "00021",
                "nombre" => "Pinoclin",
                "Precio" => "0.50"
            ],
            [
                "ID" => "00022",
                "nombre" => "Limpiador Multiusos",
                "Precio" => "1.20"
            ],
            [
                "ID" => "00023",
                "nombre" => "Escoba de Cerdas",
                "Precio" => "3.50"
            ]
            // Agrega más productos según sea necesario
        ];
    
        return $this->response->setJSON($productos);
    }

 // Respuesta mensaje 

    public function Mensaje()
    {
        $mensaje = "Esta es una respuesta simple desde la API.";
    
        return $this->response->setJSON(["mensaje" => $mensaje]);
    }


 //Array Asociativo

    public function MostrarCliente()
    {
        $datos = [
            "nombre" => "Juan",
            "edad" => 25,
            "ciudad" => "Ciudad de Ejemplo"
        ];
    
        return $this->response->setJSON($datos);
    }


}
