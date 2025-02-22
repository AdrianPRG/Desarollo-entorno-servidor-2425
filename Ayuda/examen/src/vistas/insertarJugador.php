<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsertarJugador</title>
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>
<body style="justify-content: center;align-items:center;display:flex;flex-direction:column">
    <h2>Insertar nuevo Jugador</h2>
    <form action="" method="post">

        <div class="mb-3">
            <label for="" class="form-label">Nombre Jugador</label>
            <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelpId" placeholder="Adrian" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">NIF</label>
            <input required type="text" class="form-control" maxlength="9" name="nif" id="nif" aria-describedby="emailHelpId" placeholder="11111111A" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Edad</label>
            <input required type="number" class="form-control" max="100" name="edad" id="edad" aria-describedby="emailHelpId" placeholder="20" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Puntos</label>
            <input required type="number" class="form-control" max="100" name="puntos" id="puntos" aria-describedby="emailHelpId" placeholder="220" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Posicion</label>
            <input required type="number" class="form-control" max="5" name="posicion" id="posicion" aria-describedby="emailHelpId" placeholder="220" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Altura</label>
            <input required type="number" class="form-control" max="240" name="altura" id="altura" aria-describedby="emailHelpId" placeholder="190" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id de equipo</label>
            <div class="mb-3">
                <select required class="form-select form-select-lg" name="Equipo_idEquipo" id="idequipo" >
                    <!--Se ponen solo los equipos disponibles, sacados de la db-->
                    <?php foreach ($equipos as $equipo):?>
                        <option value="<?=$equipo["idEquipo"]?>">
                        <?= $equipo["idEquipo"] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        
        <button type="submit" class="btn btn-success" >
            Insertar Entrenador
        </button>
        

    </form>
</body>
</html>