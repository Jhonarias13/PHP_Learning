<?php include 'includes/header.php';

//conocer extension de texto
$texto = "Jhon Freiman";
//echo strlen($texto);

//eliminar espacios de un texto

$texto2 = "hola mundo";
$prueba = trim($texto2);
var_dump($texto2);
echo strlen($prueba);

//convertirlo en mayuscula

echo strtoupper($texto2);

// convertirlo en minuscula

echo strtolower($texto2);

//reemplazar texto
echo "<hr>";
echo str_replace('Jhon', 'J', $texto);

$tipoCliente =  'Premium';
echo "<hr>";
echo "el cliente ". $texto . " es de tipo " . '<strong>$tipoCliente</strong>';


include 'includes/footer.php';