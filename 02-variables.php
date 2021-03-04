<?php include 'includes/header.php';


$nombre = 'Jhon'; // declarando variables
$apellido = 'Arias'; // declarando variables

echo $nombre . ' ' . $apellido; // concatenando variables e imprimiendolas en el DOM

define('constante', "este es el valor de la constante"); // declaracion de constantes y crea un identifcador

echo constante; // imprimir constantes

const constante2 = "hola mundo en una constante";// otra forma de declarar constantes

echo constante2;

//variables con dos nombres en PHP

$nombre_cliente = 'pedro'; // en php se usa mas este
$nombreCliente = 'Juan'; //  pero se puede usar esta otra forma


include 'includes/footer.php';