<?php

namespace Adrix\Examen\Model;

use Adrix\Examen\Model\Model;
use PDOException;
use PDO;

class EntrenadorM extends Model
{
    function __construct($con)
    {
        parent::__construct($con);
        $this->table = "entrenador";
    }
}
