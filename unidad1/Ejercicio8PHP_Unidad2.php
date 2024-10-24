<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg mt-3 align-items-start">
        <form method="get" action="respuesta_ejercicio8.php">
            <div class="mb-3 col-sm-6">
                <label for="numero1" class="form-label">Numero 1</label>
                <input type="number" step=".01" min="0" class="form-number" name="numero1" id="numero1">
            </div>
            <div class="mb-3 col-sm-6">
                <label for="numero2" class="form-label">Numero 2</label>
                <input type="number" step=".01" min="0"  class="form-number" name="numero2" id="numero2">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn">Borrar campos</button>
        </form>
    </div>
</body>
</html>