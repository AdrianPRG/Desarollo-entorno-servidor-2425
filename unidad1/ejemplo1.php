<html lang="es">

<head>
    <title>Formulario Basico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-lg align-items-start">
        <!-- Para enviar los datos hay que definir el modo de envio, Metodo get para que aparezca los datos en url y post los lleva invisibles
            Action para definir donde iran los datos.
        -->
        <form method="get" action="respuesta_simple.php">
            
            <div class="mb-3 col-sm-5">
                <label for="email" class="form-label">Email address</label>
                <!-- Atributo name es esencial, es el nombre por asi decirlo de la variable qie almacena el input -->
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nunca compartiremos tu email con nadie</div>
            </div>

            <div class="mb-3 col-sm-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="recuerdame" name="recuerdame">
                <label class="form-check-label" for="recuerdame">Recuerdame</label>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen de Perfil</label>
                <b></b>
                <input class="form-control" type="file" name="imagen" id="imagen">
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Color de fondo</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" value="#33293" title="Choose your color">
            </div>

            <div class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Edad</option>
                    <?php
                    //Bucle que vaya desde el 1 hasta el 120
                    //Por cada valor de edad, aparece una opcion seleccionable para el usuario
                    for ($i = 1; $i < 120; $i++) {
                        print "<option value=$i>$i</option>\n";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="sexo">Sexo</label>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="masculino">
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="femenino">
                    <label class="form-check-label" for="femenino">
                        Femenino
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="txtobservaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="txtobservaciones" name="txtobservaciones" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>