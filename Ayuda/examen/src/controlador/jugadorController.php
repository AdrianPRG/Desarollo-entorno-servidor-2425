<?php 

namespace Adrix\Examen\controlador;

use Adrix\Examen\Model\EntrenadorM;
use Adrix\Examen\Model\EquipoM;
use Adrix\Examen\Model\jugadorM;
use Adrix\Examen\Utils\Utils;
use App\Model\Equipo;

class JugadorController{

    public function ObtenerJugadores($datos){
        //Obtenemos la conexion
        $con = Utils::getConnection();
        //Creamos el modelo del jugador
        $jugadorM = new jugadorM($con);
        //Se obtiene el id del equipo, que es dato que enviamos al POST al seleccionar el nombre de un equipo
        $jugadores = $jugadorM -> cargarJugadoresEquipo($_POST["idequipo"]);
        //Tambien tenemos que coger de nuevo los datos del entrenador, pues tenemos que volver a cargar la vista
        //Si no cargamos el entrenador de nuevo, nos dira que hay un error, pues ha compactado el jugador pero no el entrenador
        $entrenadorM = new EntrenadorM($con);
        //Cargamos el entrenador
        $entrenador = $entrenadorM->cargar($datos['id']);
        //Hacemos lo mismo con el equipo
        $equipoM = new EquipoM($con);
        $equipos = $equipoM->cargarEquiposEntrenador($entrenador["idEntrenador"]);
        //Compactamos los datos para pasarlos
        $datosEntrenador = compact("entrenador");
        $datosEquipos = compact("equipos");
        $datosJugadores = compact("jugadores");
        //Los juntamos
        $conjunto = array_merge($datosEntrenador,$datosEquipos,$datosJugadores);
        //Renderizamos detalles con los datos 
        Utils::render("detalles",$conjunto);
    }

    public function CrearJugador(){
        $con = Utils::getConnection();

        $equipoM = new EquipoM($con);

        //Obtenemos los equipos disponibles de los que el jugador puede inscribirse

        $equipos = $equipoM->cargarTodoPaginado(1,200);

        $datos = compact("equipos");

        Utils::render("insertarJugador",$datos);
    }

    public function InsertarJugador(){
        $con = Utils::getConnection();

        $jugadorM = new jugadorM($con);

        $jugadorM -> insertar($_POST);
        
        Utils::redirect("/");
    }

    public function TraspasoJugador(){

        $con = Utils::getConnection();

        $equipoM = new EquipoM($con);

        $equipos = $equipoM->cargarTodoPaginado(1,200);

        $datos = compact("equipos");

        Utils::render("traspasoJugador",$datos);
    }

    public function TraspasarJugador($datos){

        $con = Utils::getConnection();

        $jugadorM = new jugadorM($con);

        var_dump($_POST);

        $jugadorM->FicharPorEquipo((int)$datos['id'],$_POST["idequipo"]);

        Utils::redirect("/");
    }

    public function DespedirJugador($datos){
        $con = Utils::getConnection();

        $jugadorM = new jugadorM($con);

        $jugadorM -> DespedirJugador($datos['id']);

        Utils::redirect("/");
    }

}

?>