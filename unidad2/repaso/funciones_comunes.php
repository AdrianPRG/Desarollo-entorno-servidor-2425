<?php
// Funciones comunes para Arrays
$array_functions = [
    'array_merge',
    'array_push',
    'array_pop',
    'array_shift',
    'array_unshift',
    'array_map',
    'array_filter',
    'array_reduce',
    'array_slice',
    'array_splice',
    'in_array',
    'array_search',
    'array_key_exists',
    'array_keys',
    'array_values',
    'count',
    'sort',
    'rsort',
    'asort',
    'ksort',
    'shuffle',
];

// Funciones comunes para Cadenas
$string_functions = [
    'strlen',
    'strpos',
    'strrpos',
    'substr',
    'str_replace',
    'str_ireplace',
    'strtoupper',
    'strtolower',
    'ucfirst',
    'lcfirst',
    'trim',
    'ltrim',
    'rtrim',
    'explode',
    'implode',
    'str_split',
    'strcmp',
    'strcasecmp',
    'number_format',
];

// Funciones comunes para Floats
$float_functions = [
    'is_float',
    'round',
    'ceil',
    'floor',
    'abs',
    'sqrt',
    'pow',
    'sin',
    'cos',
    'tan',
    'log',
    'exp',
    'number_format',
];

// Funciones comunes para Enteros
$integer_functions = [
    'is_int',
    'abs',
    'pow',
    'sqrt',
    'max',
    'min',
    'rand',
    'mt_rand',
    'intval',
];

// Imprimir ejemplos para cada categoría
echo "Funciones para Arrays:\n";
print_r($array_functions);
echo "\nFunciones para Cadenas:\n";
print_r($string_functions);
echo "\nFunciones para Floats:\n";
print_r($float_functions);
echo "\nFunciones para Enteros:\n";
print_r($integer_functions);
?>
