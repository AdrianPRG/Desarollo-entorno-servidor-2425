<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen php 2425 ALG</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <form method="post" action="respuestaexamen.php">
            <div class="mb-3 col-sm-5">
                <label for="pais" class="form-label">Pais</label>
                <select class="form-select form-select-lg" name="pais" id="pais" >
                    <option value="españa">España</option>
                    <option value="francia">Francia</option>
                    <option value="portugal">Portugal</option>
                    <option value="italia">Italia</option>
                </select>
            </div>
            <div class="mb-3 col-sm-5">
                <label for="CA" class="form-label">Comunidad autonoma</label>
                <select class="form-select form-select-lg" name="CA" id="CA" >
                    <option value="Madrid">Madrid</option>
                    <option value="Paris">Paris</option>
                    <option value="Lisboa">Lisboa</option>
                    <option value="Roma">Roma</option>
                </select>
            </div>
            <div class="mb-3 col-sm-5">
                <label for="tiendaselect" class="form-label">Tienda Seleccionada</label>
                <select class="form-select form-select-lg" name="tiendaselect" id="tiendaselect" >
                    <option value="floresmari">Floristeria Mari</option>
                    <option value="bonjourflor">Bonjour Flor</option>
                    <option value="floresport">FloresPort</option>
                    <option value="floresroma">FloresRoma</option>
                </select>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="eliminar" id="eliminar" />
                    <label class="form-check-label" for="eliminar"> Eliminar </label>
                </div>            
            </div>
            <div class="mb-3 col-sm-5">
                <label for="tiendas" class="form-label">Tiendas</label>
                <textarea class="form-control" name="tiendas" id="tiendas" rows="3"></textarea>
            </div>
            <div class="mb-3 col-sm-5">
                <label for="plantas" class="form-label">Plantas</label>
                <textarea class="form-control" name="plantas" id="plantas" rows="3"></textarea>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
    
</body>
</html>