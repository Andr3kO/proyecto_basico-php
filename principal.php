<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">

        <h1>PHP BASICO</h1>
        <ul>
            <ol>1.Operadores con String</ol>
            <ol>2.Operadores Aritmeticos</ol>
            <ol>3.Tipos de datos</ol>
            <ol>4.Operaciones con array</ol>
            <ol>5.Condicionales</ol>
            <ol>6.Ciclos</ol>
            <ol>7.Salir</ol>
            <ol>8.Capibara</ol>

        </ul>

        <h6 class="text-center">Formulario de ANDRE ALATA CUNO</h6>
        <hr>
        <form method="POST" action="" class="form-inline">
            <div class="mb-3">
                <label for="numero" class="form-label">Escoge el rango</label>
                <input type="range" name="n" id="numero" class="form-range" min="0" max="10" step="1" value="0" oninput="updateNumber(this.value)">
                <span id="rangeValue">0</span> 
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: #FFB6C1; border-color: #FFB6C1;">Enviar</button>

        </form>

        <script>
            function updateNumber(value) {
                document.getElementById('rangeValue').textContent = value;
            }
        </script>



        <hr>

        <?php
        include "./operadoreslogicos.php";
        include "./OperacionesString.php";
        include "./OperadoresAritmeticos.php";
        include "./TiposdeDatos.php";
        include "./OperacionesArray.php";
        include "./Condicionales.php";
        include "./Ciclos.php";
        include "./Salir.php";
        include "./Capibara.php";






        if (isset($_POST["n"])) {
            echo '<div class="alert alert-info">Número ingresado: ' . $_POST["n"] . '</div>';
        }

        if (isset($_GET["fruta"])) {
            echo '<div class="alert alert-success">Existe la variable "fruta": ' . $_GET["fruta"] . '</div>';
        }

        if (isset($_GET["precio"])) {
            echo '<div class="alert alert-warning">Existe la variable "precio": ' . $_GET["precio"] . '</div>';
        }

        if (isset($_POST["n"])) {
            $opcion = $_POST["n"];
            switch ($opcion) {
                case 1:

                    echo "</br>";
                    echo "Ingreso al Caso Numero 1";
                    echo "</br>";
                    $ol = new OperacionesString();
                    $ol->llamarPadre();
                    echo "</br>";
                    $ol->funcionesString();
                    echo "</br>";
                    break;


                case 2:
                    echo "</br>";
                    echo "Ingreso al Caso Numero 2";
                    echo "</br>";
                    $ol = new OperadoresAritmeticos();
                    echo "</br>";
                    $ol->Aritmeticos();
                    echo "</br>";
                    break;
                case 3:
                    echo "</br>";
                    echo "Ingreso al Caso Numero 3";
                    echo "</br>";
                    $ol = new TiposdeDatos();
                    echo "</br>";
                    $ol->Datos();
                    echo "</br>";
                    break;
                case 4:
                    echo "</br>";
                    echo "Ingreso al Caso Numero 4";
                    echo "</br>";
                    $ol = new OperacionesArray();
                    echo "</br>";
                    $ol->Array();
                    echo "</br>";
                    break;
                case 5:
                    echo "</br>";
                    echo "Ingreso al Caso Numero 5";
                    echo "</br>";
                    $ol = new Condicionales();
                    echo "</br>";
                    $ol->Condi();
                    echo "</br>";
                    break;
                case 6:
                    echo "</br>";
                    echo "Ingreso al Caso Numero 6";
                    echo "</br>";
                    $ol = new Ciclos();
                    echo "</br>";
                    $ol->Ciclo();
                    echo "</br>";
                    break;
                case 7:
                    echo "</br>";
                    echo "Se Salio";
                    echo "</br>";
                    $ol = new Salir();
                    echo "</br>";
                    $ol->Sal();
                    echo "</br>";
                    break;
                case 8:
                    echo "</br>";
                    echo "LE TOCO EL CAPIBARA";
                    echo "</br>";
                    $ol = new Capibara();
                    echo "</br>";
                    $ol->Cap();
                    echo "</br>";
                    break;

                default:
                    echo "</br>";
                    echo "Ingrese una opcion valida";
                    echo "</br>";
            }
        }

        ?>

    </div>

    <div class="text-center mt-4">
        <h6>CAPIBARA</h6>
        <img src="data:image/jpeg;base64,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" alt="Imagen de ejemplo" class="img-fluid">
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>