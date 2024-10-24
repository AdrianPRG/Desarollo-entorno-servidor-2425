<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ejercicio 9</title>
</head>
<body>
    <div class="container-lg align-items-start">
        <form method="get" action="respuesta_ejercicio9.php">
            <div class="mb-3 col-sm-5">
                    <label style="font-weight: 700;" for="nif" class="form-label">NIF</label>
                    <!-- Atributo name es esencial, es el nombre por asi decirlo de la variable qie almacena el input -->
                    <input type="text" maxlength="9" minlength="9" required class="form-control" name="nif" id="nif">
                    <div id="nif" class="form-text">Escribe tu nif</div>
            </div>
            <div class="mb-3 col-sm-5">
                    <label style="font-weight: 700;" for="tlf" class="form-label">Numero de telefono</label>
                    <!-- Atributo name es esencial, es el nombre por asi decirlo de la variable qie almacena el input -->
                    <input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required class="form-control" name="tlf" id="tlf">
                    <div id="tlf" class="form-text">Escribe tu telefono</div>
            </div>
            <div class="mb-3 col-sm-5" >
                <label style="font-weight: 700;" class="form-label">Estado social</label><br/>
                <label for="Empleado/Desempleado" class="form-label">Empleado/Desempleado</label>
                <input required type="radio" value="Empleado/Desempleado" name="estado" id="Empleado/Desempleado"><br/>
                <label for="estudiante" class="form-label">Estudiante</label>
                <input required type="radio" value="Estudiante" name="estado" id="estudiante">
            </div>
            <div>
                <label style="font-weight: 700;" for="vcl" class="form-label">Selecciona vehiculo</label>
                <select class="form-select" name="vcl" id="vcl">
                    <option value="Coche">Coche</option>
                    <option value="Moto">Moto</option>
                    <option value="Transporte Publico">Transporte Publico</option>
                </select>
            </div>
            <button type="submit" class="btn btn-secondary mt-4">Enviar</button>
        </form>
    </div>
</body>
</html>