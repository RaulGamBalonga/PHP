<?php

// Hola mundo
echo "Hello World!\n";
echo "Hola Mundo!" . "\n" . "Adiós Mundo!\n";

/*
    Este es un comentario de varias líneas
     que se extiende a lo largo de varias líneas
     y que no será interpretado por PHP     
*/ 

$my_string = "Hola mundo!\n";
$my_string = "Aqui cambiamos el valor de la variable\n";
// \n es un carácter de escape que se traduce en un salto de línea
echo $my_string;
echo gettype($my_string);

$my_string = 6;
echo $my_string . "\n";
echo gettype($my_string);

$my_string = "Hola mundo!\n";

$my_int = 7;
$my_int = $my_int + 4;
echo $my_int . "\n";
echo $my_int - 1 . "\n";
echo $my_int . "\n";
echo gettype($my_int) . "\n";

$my_double = 6.5;
echo gettype($my_double) . "\n";
// echo $my_int + $my_double + $my_string . "\n";

$my_bool = true;
echo $my_bool . "\n";
$my_bool = false;
echo $my_bool === 0 . "\n";
echo gettype($my_bool) . "\n";

echo "El valor de mi integer es: $my_int y el valor de mi boolean es $my_bool\n";
// no aparece el valor de boolean porque es false y no se imprime.

//constantes

const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT . "\n";

// Arrays

$my_array = [$my_string, $my_int, $my_double, MY_CONSTANT];
echo gettype($my_array) . "\n";
echo "esta es la posicion 0 del array" ."\t" . $my_array[0] . "\n";
array_push($my_array, $my_bool );
// echo $my_array . "\n";
// no funciona porque no se puede imprimir un array directamente
print_r($my_array);

// Diccionario
$my_dict = array("string" => $my_string, "int" => $my_int, "double" => $my_double, "constant" => MY_CONSTANT);
echo gettype($my_dict) . "\n";
print_r($my_dict);
echo $my_dict["string"] . "\n";

//Set 
// Caracteristica de los sets es que no se pueden repetir elementos
array_push($my_array, "Element");
array_push($my_array, "Element");
print_r($my_array);
print_r(array_unique($my_array));

// Flujos
for ($index = 0; $index <= 10; $index++) {
    echo "for" . $index . "\n";
}

foreach ($my_array as $element) {
    echo "forEach" . $element . "\n";
}
$index = 0;
while ($index <= sizeof($my_array) - 1) {
    echo "while" . $my_array[$index] . "\n";
    $index++;
}

$my_int = 3;

if($my_int === 1) {
    echo "El valor de my_int es 11\n";
} else if ($my_int > 11) {
    echo "El valor de my_int es mayor que 11\n";
} else {
    echo "El valor de my_int no es 11\n";
}

// Funciones
function print_number(int $a, $b) {
    echo $a + $b . "\n";
}

print_number(2,6);
// print_number("leo",6);
// no funciona porque el tipo de dato no es el correcto

class MyClass {
    public $name;
    public $age;
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

$my_class = new MyClass("Leo", 23);
print_r($my_class);
echo $my_class->name . "\n";
$my_class->name = "Juan";
echo $my_class->name . "\n";
echo gettype($my_class) . "\n";