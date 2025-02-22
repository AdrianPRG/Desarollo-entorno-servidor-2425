<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta Examen</title>
</head>
<body>
    <?php

    if(isset($_GET["nombre"]) || isset($_GET["edad"]) || isset($_GET["domicilios"]) || isset($_GET["hijos"]) || isset($_GET["estado"])){
        
        /*Datos del formulario*/

        $edad = (int)$_GET["edad"];
        $nombre = $_GET["nombre"];
        $estado = $_GET["estado"];
        $sueldo = $_GET["sueldo"];
        $domicilios = explode("\n",trim($_GET["domicilios"]));
        $hijos = explode("\n",trim($_GET["hijos"]));

        /* Datos para las comprobaciones */

        $provinciasAndaluzas = ["Cadiz","Sevilla","Malaga","Granada","Jaen","Almeria","Cordoba","Huelva"];


        // COMPROBACIONES Y VALIDACIONES DE DATOS

        //Se comprueba que la edad es correcta (Rango de 18 a 65)
        function cumpleEdad($age){
            if($age>=18 && $age<65){
                return "true";
            }
            else return "false";
        }

        //Se comprueba que el sueldo esta dentro del rango requerido
        function CumpleSueldo($salario){
            if($salario>=10000 && $salario<=30000){
                return "true";
            }
            else return "false";
        }


        //En esta funcion, se comprobarán todas las validaciones que tienen
        //que ver con las casas y domicilios

        function cumpleDomicilio($textoDomicilios){
            global $estado;
            global $provinciasAndaluzas;
            //Array donde se guardaran los datos
            $resultados = [];
            
            //Se obtiene la primera casa, para ello accedemos a la primera linea a la posicion 0
            $primeraCasa = explode(" ",trim($textoDomicilios[0]))[0];

            /*
            PRIMERA COMPROBACION

            Se hace la primera comprobacion, de que si tiene una casa en andalucia o esta casado
            ya ha cumplido un requisito
            */

            if($estado=="casado" || in_array($primeraCasa,$provinciasAndaluzas)){
                $resultados["casado/andaluz"]="true";
            }
            else{
                $resultados["casado/andaluz"]="false";
            }

            /* 
            SEGUNDA COMPROBACION 
            Se tiene en cuenta que no tiene mas de dos casas, si no las tiene
            tambien se pasa a comprobar si no son de distintas provincias
            */

            if(count($textoDomicilios)<=2){
                $resultados["doscasas"]="true";
            }
            else {
                $resultados["doscasas"]="false";
            }


            /* TERCERA COMPROBACION
            Por defecto, estableceremos que todas las casas permanecen a la misma provincia,
            si no es correcto, se cambiará su valor a false.
            */

            $resultados["mismasprovincias"] = "true";

            foreach($textoDomicilios as $domicilio){
                //Se separa por campos el domicilio actual
                $domicilioExploded = explode(" ",trim($domicilio));
                //Se compara si el domicilio actual pertenece al primer domicilio
                if($primeraCasa!=$domicilioExploded[0]){
                    //Si no es asi, se pone mismaprovincias a false y se termina
                    $resultados["mismasprovincias"] = "false";
                    break;
                }
            }
                

            return $resultados;
            
        }
        
        //Funcion para comprobar
        function cumpleHijos($hijos){
            $resultados["hijos"]="false";

            //Se comprueba que tenga hijos, esto para que no de fallo posteriormente
            if(count($hijos)>=1 && count(explode(" ",$hijos[0]))>3){
                if(count($hijos)>=3){
                    //Si tiene 3 o mas hijos, la condicion es verdadera
                    $resultados["hijos"]="true";
                }
                else{
                    //Se comprueba que, si no tiene 3 hijos, uno de ellos tenga minusvalia
                    foreach($hijos as $hijo){
                        $hijoExplode = explode(" ",trim($hijo));
                        //Se comprueba si el tercer campo (el de la minusvalia es true o false)
                        if($hijoExplode[3]=="S" || $hijoExplode[3]=="s"){
                            //Se cierra bucle y se pone a true
                            $resultados["hijos"]="true";
                            break;
                        }
                    }
                }
            }
        

            return $resultados;
        }
    }


    function MediaEdad($hijos){
        //Se inicializa el array a 0, para que no de error
        $arrayMedias = [];
        $arrayMedias["hijos"]=0;
        $arrayMedias["hijas"]=0;

        //Si hay mas de una linea, (Tiene hijos )
        if(count($hijos)>=1 && count(explode(" ",$hijos[0]))>3){
            $arrayMedias = [];
            //Se guardará el valor de la suma de las edades de los chicos
            $sumaChicos=0;
            $sumaChicas=0;
            //Se guardará el contador de los numeros de hijos e hijas
            //Por defecto es uno, ya que no sabemos si el hijo que tiene es niño o niña
            $contniños=1;
            $contniñas=1;
            foreach($hijos as $hijo){
                //Se separan los caracteres por espacio
                $hijoExplode = explode(" ",trim($hijo));
                if($hijoExplode[2]=="H"){
                    //Si es hombre, se sumará la edad del hijo al total
                    $sumaChicos+=(int)$hijoExplode[1];
                    //Se suma 1 mas al contador de niños
                    $contniños++;
                }
                //Repetimos este procedimiento con el contador de chicas
                else if($hijoExplode[2]=="M"){
                    $sumaChicas+=(int)$hijoExplode[1];
                    $contniñas++;
                }
            }

            //Se guardaran los valores en array asociativo
            //Porque se resta 1? por que por defecto, siempre se va a contar una linea al enviar formulario
            //Entonces, comprobamos que si es el caso de que realmente haya mas de dos chicos/chicas 
            //cuando se hace $contniños>1 se comprueba que almenos hay 1 niño, y no solo se cuenta la linea
            //por eso se debe retar uno al contador, para que este equiparado y se haga la media bien
            $arrayMedias["hijos"] = ($contniños>1) ? $sumaChicos/($contniños-1) : 0;
            $arrayMedias["hijas"] = ($contniñas>1) ? $sumaChicas/($contniñas-1) : 0;

            return $arrayMedias;
        }
        else return $arrayMedias;
    }


    /*Esta funcion devuelve una columna verde o roja dependiendo del valor que se haya pasado por parametros*/
    function mostrarValidaciones($dato){
        if($dato=="true"){
            //Si el dato es true, se muestra la columna verde, si no, roja
            echo "<th style='background-color:green'> $dato </th>"; 
        }
        else echo "<th style='background-color:red'> $dato </th>";
    }

    //Se muestra una tabla con los resultados a mostrar
   echo '<table border=1px class="table table-primary"
   <tr>
        <th>Edad</th>
        <th>Sueldo</th>
        <th>Domicilio (Casado o Andaluz) </th>
        <th> Domicilio (Dos Casas) </th>
        <th> Domicilio (Mismas provincias) </th>
        <th> Hijos </th>
        </tr>
   <tr> 
   <tr>';
    //Se llama a la funcion de mostrar validaciones para cada resultado
   mostrarValidaciones(cumpleEdad($edad));
   mostrarValidaciones(CumpleSueldo($sueldo));
   mostrarValidaciones(cumpleDomicilio($domicilios)["casado/andaluz"]);
   mostrarValidaciones(cumpleDomicilio($domicilios)["doscasas"]);
   mostrarValidaciones(cumpleDomicilio($domicilios)["mismasprovincias"]);
   mostrarValidaciones(cumpleHijos($hijos)["hijos"]);
   

   echo "</tr> </table>";
        
    //Finalmente, se muestra la media de los hijos e hijas
   echo "<h2> La edad media de los hijos es " . MediaEdad($hijos)["hijos"] . "</h2>";
   echo "<br> <h2> La edad media de las hijas es " . MediaEdad($hijos)["hijas"] . "</h2>";

    ?>
   
    
</body>
</html>