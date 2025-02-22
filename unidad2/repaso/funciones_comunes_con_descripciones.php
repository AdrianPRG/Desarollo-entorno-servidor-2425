<?php
// Funciones comunes para Arrays con descripciones
$array_functions = [
    'array_merge' => 'Combina uno o más arrays.',
    'array_push' => 'Añade uno o más elementos al final de un array.',
    'array_pop' => 'Elimina y devuelve el último elemento de un array.',
    'array_shift' => 'Elimina y devuelve el primer elemento de un array.',
    'array_unshift' => 'Añade uno o más elementos al inicio de un array.',
    'array_map' => 'Aplica una función a cada elemento de un array.',
    'array_filter' => 'Filtra los elementos de un array usando una función de callback.',
    'array_reduce' => 'Reduce un array a un solo valor iterativamente usando una función de callback.',
    'array_slice' => 'Extrae una porción de un array.',
    'array_splice' => 'Elimina y reemplaza una parte de un array.',
    'in_array' => 'Comprueba si un valor existe en un array.',
    'array_search' => 'Busca un valor en un array y devuelve su clave.',
    'array_key_exists' => 'Comprueba si una clave existe en un array.',
    'array_keys' => 'Devuelve todas las claves de un array.',
    'array_values' => 'Devuelve todos los valores de un array.',
    'count' => 'Cuenta el número de elementos en un array.',
    'sort' => 'Ordena un array en orden ascendente.',
    'rsort' => 'Ordena un array en orden descendente.',
    'asort' => 'Ordena un array manteniendo la asociación de índices.',
    'ksort' => 'Ordena un array por clave manteniendo la asociación de índices.',
    'shuffle' => 'Mezcla los elementos de un array aleatoriamente.',
];

// Funciones comunes para Cadenas con descripciones
$string_functions = [
    'strlen' => 'Devuelve la longitud de una cadena.',
    'strpos' => 'Encuentra la posición de la primera aparición de un substring.',
    'strrpos' => 'Encuentra la posición de la última aparición de un substring.',
    'substr' => 'Devuelve una parte de una cadena.',
    'str_replace' => 'Reemplaza todas las apariciones de un substring con otro.',
    'str_ireplace' => 'Reemplaza todas las apariciones de un substring con otro (sin distinguir mayúsculas/minúsculas).',
    'strtoupper' => 'Convierte una cadena a mayúsculas.',
    'strtolower' => 'Convierte una cadena a minúsculas.',
    'ucfirst' => 'Convierte el primer carácter de una cadena a mayúscula.',
    'lcfirst' => 'Convierte el primer carácter de una cadena a minúscula.',
    'trim' => 'Elimina los espacios en blanco (u otros caracteres) del inicio y el final de una cadena.',
    'ltrim' => 'Elimina los espacios en blanco (u otros caracteres) del inicio de una cadena.',
    'rtrim' => 'Elimina los espacios en blanco (u otros caracteres) del final de una cadena.',
    'explode' => 'Divide una cadena en un array usando un delimitador.',
    'implode' => 'Une elementos de un array en una cadena usando un delimitador.',
    'str_split' => 'Convierte una cadena en un array de caracteres.',
    'strcmp' => 'Compara dos cadenas (sensible a mayúsculas).',
    'strcasecmp' => 'Compara dos cadenas (insensible a mayúsculas).',
    'number_format' => 'Formatea un número con los decimales especificados.',
];

// Funciones comunes para Floats con descripciones
$float_functions = [
    'is_float' => 'Comprueba si una variable es de tipo float.',
    'round' => 'Redondea un número al entero más cercano o a un número específico de decimales.',
    'ceil' => 'Redondea un número hacia arriba al entero más cercano.',
    'floor' => 'Redondea un número hacia abajo al entero más cercano.',
    'abs' => 'Devuelve el valor absoluto de un número.',
    'sqrt' => 'Devuelve la raíz cuadrada de un número.',
    'pow' => 'Calcula una potencia de base y exponente.',
    'sin' => 'Devuelve el seno de un ángulo.',
    'cos' => 'Devuelve el coseno de un ángulo.',
    'tan' => 'Devuelve la tangente de un ángulo.',
    'log' => 'Devuelve el logaritmo natural de un número.',
    'exp' => 'Devuelve e elevado a la potencia especificada.',
    'number_format' => 'Formatea un número con los decimales especificados.',
];

// Funciones comunes para Enteros con descripciones
$integer_functions = [
    'is_int' => 'Comprueba si una variable es de tipo entero.',
    'abs' => 'Devuelve el valor absoluto de un número.',
    'pow' => 'Calcula una potencia de base y exponente.',
    'sqrt' => 'Devuelve la raíz cuadrada de un número.',
    'max' => 'Devuelve el valor máximo de una lista de números.',
    'min' => 'Devuelve el valor mínimo de una lista de números.',
    'rand' => 'Devuelve un número aleatorio entre un rango.',
    'mt_rand' => 'Devuelve un número aleatorio (más rápido que rand()).',
    'intval' => 'Convierte un valor a un entero.',
];

// Imprimir ejemplos para cada categoría
echo "Funciones para Arrays con descripciones:\n";
print_r($array_functions);
echo "\nFunciones para Cadenas con descripciones:\n";
print_r($string_functions);
echo "\nFunciones para Floats con descripciones:\n";
print_r($float_functions);
echo "\nFunciones para Enteros con descripciones:\n";
print_r($integer_functions);
?>

<?php
// Función para limpiar entradas
function limpiarEntrada($data) {
    $data = trim($data); // Elimina espacios al inicio y al final
    $data = stripslashes($data); // Elimina barras invertidas
    $data = htmlspecialchars($data); // Convierte caracteres especiales
    return $data;
}

// Variables para almacenar errores y datos validados
$errores = [];
$nombre = $email = $edad = $url = "";

// Procesar el formulario al enviarlo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar el nombre (solo letras y espacios)
    if (empty($_POST["nombre"])) {
        $errores['nombre'] = "El nombre es obligatorio.";
    } elseif (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]*$/", $_POST["nombre"])) {
        $errores['nombre'] = "El nombre solo puede contener letras y espacios.";
    } else {
        $nombre = limpiarEntrada($_POST["nombre"]);
    }

    // Validar el email
    if (empty($_POST["email"])) {
        $errores['email'] = "El email es obligatorio.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = "El formato del email no es válido.";
    } else {
        $email = limpiarEntrada($_POST["email"]);
    }

    // Validar la edad (entero positivo)
    if (empty($_POST["edad"])) {
        $errores['edad'] = "La edad es obligatoria.";
    } elseif (!filter_var($_POST["edad"], FILTER_VALIDATE_INT) || $_POST["edad"] <= 0) {
        $errores['edad'] = "La edad debe ser un número entero positivo.";
    } else {
        $edad = limpiarEntrada($_POST["edad"]);
    }

    // Validar la URL
    if (!empty($_POST["website"])) {
        if (!filter_var($_POST["website"], FILTER_VALIDATE_URL)) {
            $errores['website'] = "El formato de la URL no es válido.";
        } else {
            $url = limpiarEntrada($_POST["website"]);
        }
    }

    // Mostrar los resultados o errores
    if (empty($errores)) {
        echo "<h2>Datos validados correctamente:</h2>";
        echo "Nombre: $nombre<br>";
        echo "Email: $email<br>";
        echo "Edad: $edad<br>";
        echo "Sitio web: $url<br>";
    } else {
        echo "<h2>Errores en el formulario:</h2>";
        foreach ($errores as $campo => $error) {
            echo "$campo: $error<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valid</title>
</head>
</html>
