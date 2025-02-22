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
    <h1 class="text-center">Lista de Entrenadores</h1>
    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nif</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Altura</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($entrenadores as $entrenador): ?>
            <tr>
                <td><?= $entrenador['idEntrenador'] ?></td>
                <td><?= $entrenador['nif'] ?></td>
                <td><?= $entrenador['nombre'] ?></td>
                <td><?= $entrenador['edad'] ?> años</td>
                <td><?= $entrenador['altura']?> cm</td>
                <td>
                    <a href="/entrenadores/<?= $entrenador['idEntrenador'] ?>" class="btn btn-info btn-sm">Ver</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    </div>
</body>
</html>