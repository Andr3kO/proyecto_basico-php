<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capibaras - Los Reyes de los Humedales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 2rem auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 2rem;
        }
        img {
            max-width: 100%;
            border-radius: 10px;
        }
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #4CAF50;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Capibaras - Los Reyes de los Humedales</h1>
    </header>

    <div class="container">
        <?php
        // Datos sobre el capibara
        $nombre = "Capibara";
        $nombreCientifico = "Hydrochoerus hydrochaeris";
        $descripcion = "El capibara es el roedor más grande del mundo. Es un animal social y semiacuático que habita en los humedales y áreas cercanas a ríos y lagos en América del Sur.";
        $habitat = "Humedales, ríos y áreas pantanosas.";
        $dieta = "Hierbas, plantas acuáticas, frutas y cortezas.";
        $curiosidad = "Pueden permanecer sumergidos bajo el agua durante varios minutos para escapar de depredadores.";
        $imagen = "https://media.tenor.com/EqHYyOvNNRgAAAAe/capybara-encanto-encanto.png"; // Imagen pública de Wikipedia

        // Mostrar información
        echo "<h2>$nombre ($nombreCientifico)</h2>";
        echo "<img src='$imagen' alt='Capibara'>";
        echo "<p><strong>Descripción:</strong> $descripcion</p>";
        echo "<p><strong>Hábitat:</strong> $habitat</p>";
        echo "<p><strong>Dieta:</strong> $dieta</p>";
        echo "<p><strong>Curiosidad:</strong> $curiosidad</p>";
        ?>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Página dedicada a los capibaras</p>
    </footer>
</body>
</html>
