<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color:aliceblue;">
    <form method="get" action="respuesta.php">
        <div class="container mb-4 mt-5">
            <h1>Formulario Campos</h1>
            <div class="mb-3 col-sm-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3 col-sm-5">
                <label for="edad" class="form-label">Edad</label>
                <input required type="number" min=0 max=99 class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                    <label for="estado">Estado</label>
                    <br>
                    <div class="form-check-inline mt-3">
                        <input required class="form-check-input" type="radio" name="estado" id="casado" value="casado">
                        <label class="form-check-label" for="casado">
                            Casado
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input required class="form-check-input" type="radio" name="estado" id="soltero" value="soltero">
                        <label class="form-check-label" for="soltero">
                            Soltero
                        </label>
                    </div>
                    <div required class="form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" id="otro" value="otro">
                        <label class="form-check-label" for="otro">
                            Otro
                        </label>
                    </div>
            </div>
            <div class="mb-3 mt-4 col-sm-5">
                <p>Sueldo</p>   
                <select required class="form-select form-select-lg" name="sueldo" id="sueldo" >      
                    <?php   
                        for($x=0;$x<=50000;$x+=10000){
                            echo "<option value='$x'>$x</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3 col-sm-5">
                <label for="hijos" class="form-label">Hijos</label>
                <textarea class="form-control" name="hijos" id="hijos" rows="3"></textarea>
            </div>
            <div class="mb-3 col-sm-5">
                <label for="domicilios" class="form-label">Domicilios</label>
                <textarea required class="form-control" name="domicilios" id="domicilios" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" >
            Submit
        </button>
        </div>
        
    </form>
</body>

</html>