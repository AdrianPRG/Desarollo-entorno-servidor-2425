<?php

namespace Adrix\Examen\controlador;

use Adrix\Examen\Model\EntrenadorM;
use Adrix\Examen\Model\EquipoM;
use Adrix\Examen\Utils\Utils;



class EntrenadorController
{


    public function mostrarEntrenadores()
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $entrenadorM = new EntrenadorM($con);
        //Cargamos los entrenadores
        $entrenadores = $entrenadorM->cargarTodoPaginado(1, 200);
        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("entrenadores");
        //Cargamos la vista
        Utils::render('index', $datos);
    }

    public function mostrarEntrenador($datos)
    {
        $id = $datos['id'];

        //Nos conectamos a la bd
        $con = Utils::getConnection();
        //Creamos el modelo
        $entrenadorM = new EntrenadorM($con);
        //El id que obtenemos por la ruta en fastroute
        $entrenador = $entrenadorM->cargar($id);
        //Ahora obtenemos los equipos
        $equipoM = new EquipoM($con);
        //Cargamos los equipos del entrenador
        $equipos = $equipoM->cargarEquiposEntrenador((int)$id);

       // ($equipos==null) ? $equipos = $equipos : $equipos=[];

        //Como tenemos que pasar varios datos, les hacemos compact

        $datosEquipo = compact("equipos");
        $resultado = compact("entrenador");

        //Como son dos arrays distintos, los juntamos y le pasamos los datos a la vista
        $conjunto = array_merge($datosEquipo,$resultado);

        //renderizamos detalles
        Utils::render("detalles",$conjunto);
    }
}
