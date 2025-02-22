<?php

namespace Adrix\Examen\Model;

use Adrix\Examen\Model\Model;
use PDOException;
use PDO;

class jugadorM extends Model
{

    function __construct($con)
    {
        parent::__construct($con);
        $this->table = "Jugador";
    }

    function cargarJugadoresEquipo($idEquipo)
    {
        try {

            $sql = "Select * from $this->table WHERE Equipo_idEquipo = :id";

            $stmt = $this->con->prepare($sql);

            //Asignamos la forma de devolver los datos
            //En array asociativo
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $stmt->bindParam(":id", $idEquipo, PDO::PARAM_INT);

            $resultado = $stmt->execute();

            if ($resultado) return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error al cargar equipos " . $e->getMessage();
        }
    }

    public function FicharPorEquipo($idjugador,$idEquipo)
    {
        try {
            $sql = "UPDATE $this->table SET Equipo_idEquipo = :idequipo WHERE idJugador = :idjugador";

            $stmt = $this->con->prepare($sql);

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $stmt->bindParam(":idequipo", $idjugador, PDO::PARAM_INT);
            $stmt->bindParam(":idjugador", $idEquipo, PDO::PARAM_INT);

           $resultado =  $stmt->execute();

           var_dump($resultado);
        } catch (PDOException $e) {
            echo "Error al actualizar --> " . $e->getMessage();
        }
    }

    public function comprobarJugador($id){
        try {

            $sql = "Select * from $this->table WHERE idJugador = :id";

            $stmt = $this->con->prepare($sql);

            //Asignamos la forma de devolver los datos
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            $resultado = $stmt->execute();

            return $resultado;
        } catch (PDOException $e) {
            echo "Error al cargar equipos " . $e->getMessage();
        }
    }

    public function DespedirJugador($id){
        if($this->comprobarJugador($id)){
            $sql = "DELETE FROM $this->table where idJugador = :id";

            $stmt = $this->con->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            $resultado = $stmt->execute();

            return $resultado;

        }
        else{
            echo "No hay jugadores con ese id";
        }
    }


}
