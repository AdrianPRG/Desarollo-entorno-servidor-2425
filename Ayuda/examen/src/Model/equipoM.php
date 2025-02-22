<?php 

namespace Adrix\Examen\Model;

use Adrix\Examen\Model\Model;
use PDOException;
use PDO;

class EquipoM extends Model{
    function __construct($con)
        {
            parent::__construct($con);
            $this->table = "Equipo";
        }

    function cargarEquiposEntrenador($identrenador){
        try{

            $sql = "Select * from $this->table WHERE Entrenador_idEntrenador = :id";

            $stmt = $this->con->prepare($sql);

            //Asignamos la forma de devolver los datos
            //En array asociativo
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $stmt -> bindParam(":id",$identrenador,PDO::PARAM_INT);

            $resultado = $stmt -> execute();

            if ($resultado) return $stmt->fetchAll();

        }catch(PDOException $e){
            echo "Error al cargar equipos " . $e -> getMessage();
        }

    }


    public function ficharPorEquipo($idEquipo,$idJugador){
        
    }
}


?>