<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="description" content="Numeros primos en PHP">
        <meta name="keywords" content="PHP,Formularios,Javascript,diseño web,primos">
        <title>AF puntuable 1</title>
    </head>

    <body>
        <?php
            echo "Nombre: " . $_POST['nombre']."<br>";
            echo "Contraseña: " . $_POST['pass']."<br>";
            echo "Coche: " . $_POST['coche']."<br>";
            echo "Comunidad autonoma: ".$_POST['comunidad']."<br>";
            echo "Animal: " . $_POST['animal']."<br>";
            echo "Color: " . $_POST['color']."<br>";
            echo "Comentario: " . $_POST['mensaje']."<br>";
            echo "Campo oculto: " . $_POST['oculto']."<br>";






            /*
            echo "Nombre: " . $nombre . "<br>";
            $pass =$_POST['pass'];
            $coche =$_POST['coche'];
            $comun =$_POST['comunidad'];
            $animal =$_POST['animal'];
            $color =$_POST['color'];
            $mensaje =$_POST['mensaje'];
            $oculto =$_POST['oculto'];

            echo "<h2>Datos del formulario:</h2>";

            echo "Clave: " . $pass . "<br>";
            echo "Marca de coche: " . $coche . "<br>";
            echo "Comunidades Autónomas seleccionadas: " . implode(", ", $comun) . "<br>";
            echo "Animal seleccionado: " . $animal . "<br>";
            echo "Color de fondo seleccionado: " . $color . "<br>";
            echo "Comentario: " . $mensaje . "<br>";
            echo "Campo oculto: " . $oculto . "<br>";

            echo "<style>body{background-color: " . $color . ";}</style>";
            */

        ?>
    </body>
</html>