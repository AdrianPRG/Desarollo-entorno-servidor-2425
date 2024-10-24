<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
    <div class="container-lg align-items-start">
        <form method    ="POST" action="ejercicio.php">
            <div class="mb-3 mt-5 col-sm-5">
                <label for="palabra">Palabra</label>
                <input type="text" class="form-control" name="palabra" id="palabra" aria-describedby="emailHelp">
                <div id="palabra" class="form-text">Escribe una palabra</div>
            </div>
            <div class="mb-3">
                    <label for="txtobservaciones" class="form-label">Texto</label>
                    <textarea class="form-control" id="texto" maxlength="120" name="texto" rows="3"></textarea>
                </div>
            <div class="container-lg align-items-start">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="mayus" id="mayus" />
                    <label class="form-check-label" for="">Desactivar mayusculas</label>
                </div>
            </div>
            <div class="display:flex mt-4">
            <input type="submit" class="btn btn-primary" value="ENVIAR">
            <input type="reset" class="btn btn-secondary" value="BORRAR">

            </div>
        </form>
    </div>
    <?php

    ?>

</body>
</html>