<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traspaso</title>
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>
<body style="width:100%;justify-content: center;align-items:center;display:flex;flex-direction:column">
    <form action="" method="post">
        <h2>Elige el equipo al quieres traspasar al jugador</h2>
        <div class="mb-3">
            <label for="" class="form-label">Equipo a traspasar</label>
            <select class="form-select form-select-lg" name="idequipo" id="idequipo" >
                <?php foreach($equipos as $equipo): ?>
                    <option value="<?=$equipo['idEquipo']?>"><?=$equipo["nombre"]?></option>
                <?php endforeach ?>
            </select>
            <button class="mt-4 mb-4 btn btn-primary">Traspasar al equipo seleccionado</button>
            <a href="/" class="btn btn-danger">volver atras</a>
        </div>
        
    </form>
</body>
</html>