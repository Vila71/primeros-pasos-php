<?php 
//string
$miVariableString = "Hola, esto es una cadena de texto.";
$nombre ="Loli";

//integer
$edad =52 ;

//punto flotante
$promedio =8.5;

//tipo boolean
$esEstudiante = true;

//array
$coloresFavoritos = array("azul","amarillo","verde");

//tipo null
$valorNulo = null;

//mostrar valor variables en pantalla

echo "Nombre: $nombre\n";
echo "Edad: $edad\n";
echo "Promedio: $promedio\n";
echo "Es estudiante: " . ($esEstudiante ? 'true' : 'false') . "\n";
echo "Colores favoritos: " . implode(", ", $coloresFavoritos) . "\n";
echo "Valor nulo: $valorNulo\n";

//¿Que tipo de dato son las siguientes variales

//Fácil
$nombre ="Luna";
//$nombre:es una cadena de texto(string)porque está rodeada por comillas
$apellido ="Lovegoog";
//$apellido:string,por la misma razón que el anterior
$edad = 42;
//$edad:integer (numero entero)
$Ravenclaw = true;
//$Ravenclaw:booleano(representa un valor verdadero o falso)

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
//$promedio: float(números decimales)
$nombre_completo =$nombre."";
//(string)concatena dos variables de tipo string
$apellido;
//linea de codigo imcompleta sin valor asignado
$presento_examen =(bool) 1;
//booleano en php cualquier número distinto de cero php 

//Avanzado
$numero_preguntas = 5 + "5";
//Integer (se está sumando el número entero 5 con la cadena de texto "5")
$numero_respuestas = "5" + 5;
//Integer (se está sumando la cadena de texto "5" con el número entero 5)
$promedio_maximo =
//incompleta
$numero_respuestas / 1.0;
// double y tb podría ser float
$nargles = 3 + "5 nargles" ;
// Se está sumando un número entero (3) con una cadena de texto que no es un número válido ("5 nargles").
// PHP intentará convertir la cadena a un número, tomando la parte numérica inicial y realizando la suma.
// Como la cadena comienza con un número válido ("5"), se realizará la conversión y la suma.
// Por lo tanto, $nargles es de tipo entero

//Suponiendo estas variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

//Resultado según tablas de verdad
$es_un_michi_grande && $le_gusta_comer ;
//true
$es_un_michi_grande || $sabe_volar ;
//true
$sabe_volar || $tiene_2_patas ;
//false
$le_gusta_comer ;
//true
$le_gusta_comer || $es_un_michi_grande ;
//true

/*Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la
variable original.*/ 

$miVariableString = "Hola, esto es una cadena de texto.";

$mayusculas =strtoupper($miVariableString);

echo "Cadena original: " . $miVariableString . "<br>";
echo "Cadena en mayúsculas: " . $mayusculas;

//Imprime en pantalla la longitud de la variable tipo string.
$miVariableString = "Hola, esto es una cadena de texto.";

// Imprimir en pantalla la longitud de la cadena
echo "Longitud de la cadena: " . $longitud . "<br>";

// Obtener la cantidad de palabras en la cadena
$palabras = str_word_count($miVariableString);

// Imprimir en pantalla la cantidad de palabras en la cadena
echo "Cantidad de palabras: " . $palabras . "<br>";

// Invertir el orden de los caracteres en la cadena deuna variable de tipo string
$miVariableString = "Hola, esto es una cadena de texto.";

// Invertir el orden de los caracteres en la cadena
$inverso = strrev($miVariableString);

// Imprimir en pantalla la cadena en orden inverso
echo "Cadena en orden inverso: " . $inverso . "<br>";

// La variable original no se modifica
echo "Cadena original: " . $miVariableString;

// Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.
// Definimos una variable de tipo string
$miVariableString = "Hola, esto es una cadena de texto con la palabra Gato.";

// Reemplazar la palabra 'Gato' por 'Michi'
$miVariableString = str_replace('Gato', 'Michi', $miVariableString);

// Imprimir en pantalla la cadena con el reemplazo
echo "Cadena con reemplazo: " . $miVariableString;

//Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla
$numero1 = 42;
$numero2 = 18;

// Imprimir ambas variables en pantalla
echo "Número 1: " . $numero1 . "<br>";
echo "Número 2: " . $numero2;

//Suma ambas variables de tipo integer e imprime en pantalla.
$numero1 = 42;
$numero2 = 18;

// Sumar ambas variables
$suma = $numero1 + $numero2;

// Imprimir el resultado en pantalla
echo "La suma de los números es: " . $suma;

/*Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
consola*/ 
$numero1 = 1;
$numero2 = 0;

// Imprimir tipo de dato en pantalla
echo "Tipo de dato de \$numero1: " . gettype($numero1) . "<br>";
echo "Tipo de dato de \$numero2: " . gettype($numero2) . "<br>";

// Mostrar tipo de dato en consola
echo "<script>console.log('Tipo de dato de \$numero1:', '" . gettype($numero1) . "');</script>";
echo "<script>console.log('Tipo de dato de \$numero2:', '" . gettype($numero2) . "');</script>";

/*a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato
en pantalla y consola.*/ 
// Declarar dos variables de tipo integer y asignarles valores
$numero1 = 1;
$numero2 = 0;

// Cambiar el tipo de dato a booleano
$booleano1 = (bool) $numero1;
$booleano2 = (bool) $numero2;

// Imprimir tipo de dato booleano en pantalla
echo "Tipo de dato booleano de \$booleano1: " . gettype($booleano1) . "<br>";
echo "Tipo de dato booleano de \$booleano2: " . gettype($booleano2) . "<br>";

// Mostrar tipo de dato booleano en consola
echo "<script>console.log('Tipo de dato booleano de \$booleano1:', '" . gettype($booleano1) . "');</script>";
echo "<script>console.log('Tipo de dato booleano de \$booleano2:', '" . gettype($booleano2) . "');</script>";

/*Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
en pantalla y por consola el resultado*/ 

function sumarNumeros($numero1, $numero2){
    return $numero1 + $numero2 ;

}
//llamar la función y obtener resultado
$resultado = sumarNumeros(5,7);

//imprimir el resultado en pantalla
echo "La suma de los numeros es: ".$resultado ."<br>";

//Crear función que determine si un número es par o impar. Imprime por consola y pantalla
function esParOImpar($numero){
    if($numero %2==0){
        return "par";
    }else {
       return "impar" ;
    }
}

// Llamar a la función y obtener el resultado
$numeroEvaluado = 10; // Puedes cambiar este número según tus necesidades
$resultadoParImpar = esParOImpar($numeroEvaluado);

// Imprimir el resultado en pantalla
echo "El número " . $numeroEvaluado . " es " . $resultadoParImpar . "<br>";

// Mostrar el resultado en consola
echo "<script>console.log('El número " . $numeroEvaluado . " es " . $resultadoParImpar . "');</script>";

//Crear un array de 10 números
$numeros = array(1,2,3,4,5,6,7,8,9,10);

//Obtén el largo del array e imprime en pantalla y consola.
$longitud = count($numeros);

echo "Largo del array: " . $longitud . "<br>";

//Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla

// Crear un array de 10 números
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Agregar un valor tipo string al array
$numeros[] = "Once"; // Agregamos la cadena "Once" al final del array

// Imprimir el array en pantalla
echo "Array de números con valor tipo string: ";
print_r($numeros);

//Ahora agrega 2 elementos más a tu array e imprime en pantalla.
// Crear un array de 10 números
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Agregar dos elementos al array
$numeros[] = "Once";
$numeros[] = 12;
$numeros[] = "Trece";

// Imprimir el array en pantalla
echo "Array de números con elementos adicionales: ";
print_r($numeros);

//Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.
// Crear un array de 10 números
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Crear un nuevo array
$nuevosNumeros = array(11, 12, 13, 14, 15);

// Concatenar los dos arrays
$arrayConcatenado = array_merge($numeros, $nuevosNumeros);

// Imprimir el array concatenado en pantalla
echo "Array resultante de la concatenación: ";
print_r($arrayConcatenado);

//Crear una función que imprima en consola y pantalla todos los números de un array en una lista
// Definir la función que imprime los números en consola y pantalla
function imprimirNumeros($arrayNumeros) {
    echo "Números en pantalla:<br>";
    echo "<ul>";

    foreach ($arrayNumeros as $numero) {
        echo "<li>$numero</li>";
    }

    echo "</ul>";

    echo "<script>console.log('Números en consola:', " . json_encode($arrayNumeros) . ");</script>";
}

// Crear un array de ejemplo
$numerosEjemplo = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Llamar a la función con el array de ejemplo
imprimirNumeros($numerosEjemplo);



?>





