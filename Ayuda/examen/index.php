<?php

use FastRoute\RouteCollector;
use FastRoute\Dispatcher;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/src");
$dotenv->load();

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {

    //Con addroute voy añadiendo rutas url por get o por post a las que responderemos
    //Las que no esten aquí darán fallo

    //La primera ruta, al hacer peticion GET se llama mostrarEntrenadores
    $r->addRoute('GET', '/', ['Adrix\Examen\controlador\EntrenadorController', 'mostrarEntrenadores']);
    //Al ir a la ruta de un entrenador, llamaremos a la funcion mostrarEntrenador que nos dara sus detalles, asi
    //como el equipo al que pertenece
    $r->addRoute('GET', '/entrenadores/{id:\d+}', ['Adrix\Examen\controlador\EntrenadorController', 'mostrarEntrenador']);
    //Al hacer peticion POST, se Mostraran los Jugadores de el equipo seleccionado
    $r->addRoute('POST', '/entrenadores/{id:\d+}', ['Adrix\Examen\controlador\JugadorController', 'ObtenerJugadores']);
    //Al hacer una peticion GET a insertarJugadores, se renderizara
    $r->addRoute('GET', '/entrenadores/insertarJugador', ['Adrix\Examen\controlador\JugadorController', 'CrearJugador']);
    //Al hacer una peticion POST en entrenadores/insertarjugador, se llamará a la funcion correspondiente para
    //insertar al jugador
    $r->addRoute('POST', '/entrenadores/insertarJugador', ['Adrix\Examen\controlador\JugadorController', 'InsertarJugador']);
    //Ruta para cuando vayamos a traspasar un jugador de un equipo a otro
    $r->addRoute('GET', '/entrenadores/{id:\d+}/traspasar', ['Adrix\Examen\controlador\JugadorController', 'TraspasoJugador']);
    //ruta que al hacer post, se llamara a la funcion de traspasar jugador
    $r->addRoute('POST', '/entrenadores/{id:\d+}/traspasar', ['Adrix\Examen\controlador\JugadorController', 'TraspasarJugador']);
    //ruta para eliminar
    $r->addRoute('GET', '/entrenadores/{id:\d+}/eliminar', ['Adrix\Examen\controlador\JugadorController', 'DespedirJugador']);



});

//Dependiendo de la solicitud haremos una cosa u otra 
//recomemos la url y si ha sido get post o cual
// Obtener datos de la solicitud
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Eliminar parámetros de la consulta
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

// Despachar la ruta
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case Dispatcher::NOT_FOUND:
        // Ruta no encontrada
        http_response_code(404);
        echo "404 - Página no encontrada<br>Intentalo de nuevo";
        break;

    case Dispatcher::METHOD_NOT_ALLOWED:
        // Método HTTP no permitido
        $allowedMethods = $routeInfo[1];
        http_response_code(405);
        echo "405 - Método no permitido. Métodos permitidos: " . implode(', ', $allowedMethods);
        break;

    case Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        //Asignacion doble de variables que se reciben desde un array seria igual a las dos siguientes lineas
        //$class=$handler[0];
        //$method=$handler[1];
        [$class, $method] = $handler;
        //Equivalente a $controller = new App\Controlador\EntrenadorController();
        $controller = new $class();
        //Llamamos a la funcion encargada de despachar la ruta
        $controller->$method($vars);
        break;
}
