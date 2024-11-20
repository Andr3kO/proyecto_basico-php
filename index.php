<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;

            height: 100vh;
            background-image: url('https://www.shutterstock.com/image-vector/cute-capybara-orange-on-head-600nw-2409644785.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <p>ANDRE J. ALATA CUNO</p>

    


<?php

$dataso_1 = 6;
    $dataso_2 = 9;
    

    if ($dataso_2 == 9) {
        echo "</br> Es igual";
    } elseif ($dataso_2 == 10) {
        echo "No es igual";
    }

$edad = 25; 
echo "</br> Integer: $edad<br>";

$precio = 99.99; 
echo "Float: $precio<br>";

$nombre = "Andre J. Alata Cuno"; 
echo "String: $nombre<br>";

$verdad = true; 
echo "Boolean: " . ($verdad ? 'true' : 'false') . "<br>";

$colores = ["Rojo", "Verde", "Azul","🐈"]; 
echo "Array: " . implode(", ", $colores) . "<br>";

class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

$persona = new Persona("Andre", 25);
echo "Object: Nombre: {$persona->nombre}, Edad: {$persona->edad}<br>";

$variableNula = null; 
echo "NULL: " . var_export($variableNula, true) . "<br>";

$lista = array("1", "2", "3", "4", "5", "6");

for ($i = 0; $i < count($lista); $i++) {
    echo " ANDRE ALATA Elemento: $i: " . $lista[$i] . "<br>";
}
    echo "<br> IMPRIMIENDO: <br> ";
foreach ($colores as $item){
    echo $item. "<br>";
}

$numeros = range(1, 12);

echo "<br> IMPRIMIENDO LA TABLA DE MULTIPLICAR<br><br> DEL 1 AL 12 de ANDRE ALATA: <br><br>}";


foreach ($numeros as $numero) {
    echo "<b>Tabla del $numero:</b><br>";
    
    
    foreach (range(1, 12) as $i) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }

    echo "<br>"; 
}
?>





</body>
</html>