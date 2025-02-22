<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center">Detalles del Entrenador</h1>

        <table class="table table-bordered mt-4">
            <tr>
                <th>ID</th>
                <td><?= $entrenador['idEntrenador'] ?></td>
            </tr>
            <tr>
                <th>Nif</th>
                <td><?= $entrenador['nif'] ?></td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td><?= htmlspecialchars($entrenador['nombre']) ?></td>
            </tr>
            <tr>
                <th>Edad</th>
                <td><?= $entrenador['edad'] ?> años</td>
            </tr>
            <tr>
                <th>Altura</th>
                <td><?= $entrenador['altura'] ?> cm</td>
            </tr>
        </table>
        <form method="post" action="">
            <select class="form-select form-select-lg" name="idequipo" id="idequipo">
                <?php foreach ($equipos as $equipo): ?>
                    <option value="<?= $equipo["idEquipo"] ?>"><?= $equipo["nombre"] ?></option>
                <?php endforeach ?>
            </select>
            <button class="btn btn-primary mt-4">Cargar</button>
        </form>
        <!--Si se ha pulsado cargar, mostramos los jugadores-->
        <?php if(isset($_POST["idequipo"])): ?>
            <div
            class="table-responsive mt-4">
            <table
                class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id Jugador</th>
                        <th scope="col">Nif</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Puntos</th>
                        <th scope="col">Posicion</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Equipo_idEquipo</th>
                        <th scope="col">Acctiones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jugadores as $jugador):?>
                        <tr>
                            <td> <?php echo $jugador["idJugador"]?> </td>
                            <td><?php echo $jugador["nif"]?></td>
                            <td><?php echo $jugador["nombre"]?></td>
                            <td><?php echo $jugador["edad"]?></td>
                            <td><?php echo $jugador["puntos"]?></td>
                            <td><?php echo $jugador["posicion"]?></td>
                            <td><?php echo $jugador["altura"]?></td>
                            <td><?php echo $jugador["Equipo_idEquipo"]?></td>
                            <td>
                                <a href="/entrenadores/<?=$jugador["idJugador"]?>/eliminar" class="btn btn-danger">Eliminar</a>
                                <a href="/entrenadores/<?=$jugador["idJugador"]?>/traspasar" class="btn btn-warning">Traspasar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="insertarJugador" class="btn btn-success">Insertar Jugador</a>
        </div>
        <?php endif ?>


        <a href="/" class="btn btn-secondary mt-3">Volver al listado</a>
</body>

</html>