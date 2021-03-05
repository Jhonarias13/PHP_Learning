<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

// util paraw ver los contenidos de un array
echo "<hr>";



// genera una linea en el DOM

echo '<hr>';
// acceder a los elementos de un array
echo $carrito[1];


//anade un indice en la posicion 3 del arreglo
$carrito[3] = "nuevo producto..";


//a;ade al final del arreglo
array_push($carrito, 'audifonos');

//a;ade al comienzo 
array_unshift($carrito, 'dvd');

echo "<pre>";
var_dump($carrito);
echo "</pre>";
include 'includes/footer.php';