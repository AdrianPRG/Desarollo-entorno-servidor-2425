<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="mt-5 ms-5">
        <form>
            <div class="mb-3 col-3">
                <label for="num" class="form-label" style="font-family:Georgia, 'Times New Roman', Times, serif;">Introduce numero</label>
                <input
                    type="number"
                    min="1"
                    max="10"
                    class="form-control"
                    name="num"
                    id="num"
                    aria-describedby="helpId"
                    placeholder="1,2,3,4"
                />
                <small id="num" class="form-text text-muted">Rango: 1-10</small>
            </div>
            <label class="form-label" style="font-family:Georgia, 'Times New Roman', Times, serif;" for="divchek">Escoga las opciones -> </label>
            <div
                id="divchek"
                class="btn-group"
                role="group"
                aria-label="Basic checkbox toggle button group">
                <input
                    type="checkbox"
                    class="btn-check"
                    id="media"
                    name="media"
                    autocomplete="off"
                />
                <label
                    class="btn btn-outline-primary"
                    for="media"
                    >Media de numeros</label
                >
                <input
                    type="checkbox"
                    class="btn-check"
                    id="aritmetica"
                    name="aritmetica"
                    autocomplete="off"
                />
                <label
                    class="btn btn-outline-primary"
                    for="aritmetica"
                    >Succesion aritmetica</label
                >
                <input
                    type="checkbox"
                    class="btn-check"
                    id="factorial"
                    name="factorial"
                    autocomplete="off"
                />
                <label
                    class="btn btn-outline-primary"
                    for="factorial"
                    >Factorial</label
                >
            </div>

            <div class="mb-3 col-5">
                <label for="texto" class="form-label">Introducir texto</label>
                <textarea class="form-control" name="texto" id="texto" rows="3"></textarea>
            </div>
                
        
            <div>
                <button
                    type="submit"
                    class="btn btn-secondary"
                    style="background-color:beige;color:black;font-family:'Times New Roman', Times, serif">
                    Procesar.
                </button>
            </div>
            
        </form>
    </div>


    <?php

    // Ejercicio4 realizar un progrma que lea los sigueintes datos
    /**
     * limite de un numero de 1 a 10 utilizando range de html
     * 3 chekbox,   uno denominado media, otro succesion arimetica y ottro factorial
     * y otro un text area conn 3 lineas llenas de datos de tipo int float y string
     * Debe de tener un diseño cuco con bootstrap
     * el programa php debe de realizar lo siguiente:
     * la suma de todos los enteros y los floats, por separado y juntos.    (suma de floats, enteros, y los dos)
     * la media de todos los numeros si el chekbox esta marcado.
     * la succesion aritmetica del el numero definido con el range, 10 valores (2,4,8,16,32,etc..) si el chekbox esta marcado
     * el factorial del numero entero que este en la posicion que marca el range, si no hay del mismo valor del range
     * (es dcir, si esta puesto numero el 4, hay que buscar el 4 numero en el textarea , si no pues el del range) si esta buscado.
     * la palabra mas larga de la ultima fila
     * 
     * Todos los valores dben de almacenarse en un array asociativo con claves de texto con nombre logico
     * 
     */


    ?>

</body>
</html>