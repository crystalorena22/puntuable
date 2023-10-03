<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="description" content="Numeros primos en PHP">
        <meta name="keywords" content="PHP,Formularios,Javascript,diseño web,primos">
        <link rel="stylesheet" href="G:\Mi unidad\Servidor\puntuable\AF_PUNTUABLE1\estilo.css">
        <title>AF puntuable 1</title>
        <style>
           body {
                font-family: Arial, sans-serif;
                background-color: #c8c4c9;
                width:450px
                padding: 32;
            }

            h1 {
                text-align: center;
                font-size: 24px;
                color: #000000;
                margin-top: 20px;
            }

            p {
                font-size: 18px;
                color: #251818;
                margin-bottom: 10px;
            }

            .container {
                text-align: left;
                box-sizing: border-box;
                width: 300px;
                padding: 16px;
                margin: auto;
                border-radius: 10px;
                background-color: #c8c4c9;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            }

        </style>
    </head>
    <body>
        <div class="container">
            <h1>Datos</h1>
            <?php

                $nombre = $_POST['nombre'];
                echo "<p>Nombre: $nombre</p>";

                $pass = $_POST['pass'];
                echo "<p>Contraseña: $pass</p>";

                $coche = $_POST['coche'];
                echo "<p>Marca de coche: $coche</p>";

                $com = $_POST['comunidad'];
                if (!empty($com)) {
                    echo "<p>Comunidade/s Autónoma/s: " . implode(", ", $com) . "</p>";
                } else {
                    echo "<p>No se seleccionaron comunidades autónomas.</p>";
                }

                $animal = $_POST['animal'];
                echo "<p>Animal: $animal</p>";

                $color = $_POST['color'];
                echo "<p>Color: $color</p>";

                $mensaje = $_POST['mensaje'];
                echo "<p>Comentario: $mensaje</p>";

                $hidden = $_POST['oculto'];
                echo "<p>Oculto: $hidden</p>";

                echo "<style>body{background-color: $color;}</style>";

            ?>
        </div>
    </body>
</html>
