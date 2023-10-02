<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta name="description" content="Numeros primos en PHP">
	<meta name="keywords" content="PHP,Formularios,Javascript,diseño web,primos">
	<title>AF puntuable 1</title>
</head>

<body>
    <h1>Formulario</h1>
		<form name='formulario_operaciones' action='' method='post' action='color2.php'>
			<table>
				<tr>
					<td><label for="nombre">Escriba su Nombre:</label></td>
					<td><input type='text' name='nombre' placeholder='Nombre'></td>
				</tr>
                <tr>
					<td>Escriba su Contraseña: </td>
					<td><input type='password' name='pass'placeholder='Contraseña'></td>
				</tr>
                <tr>
					<td>Elija su marca de coche: <br>
                        <input type='radio' name='coche' value='citroen' >Citroën<br>
                        <input type='radio' name='coche' value='citroen' >Jeep<br>
                        <input type='radio' name='coche' value='citroen' >Toyota<br>
                    </td>
				</tr>
                <tr>
					<td>Elija su Comunidad Autonoma: <br>
                        <input type='checkbox' name='comunidad' value='andalucia' >Andalucia<br>
                        <input type='checkbox' name='comunidad' value='galicia' >Galicia<br>
                        <input type='checkbox' name='comunidad' value='vasco' >Pais Vasco<br>
                        <input type='checkbox' name='comunidad' value='cataluña' >Cataluña<br>
                        <input type='checkbox' name='comunidad' value='leon' >Castilla y León<br>
                    </td>
				</tr>
                <tr>
					<td>Escoja un animal:

                        <select name='animal'>
                            <option>León</option>
                            <option>Serpiente</option>
                            <option>Pingüino</option>
                            <option>Gato</option>

                        </select>
                    </td>
				</tr>
                <tr>
					<td>Escoja un color: <br>
                        <input type='radio' name='color' value='purple'>Lila<br>
                        <input type='radio' name='color' value='celeste'>Celeste<br>
                        <input type='radio' name='color' value='beige' >Beige<br>
                    </td>
				</tr>
                <tr>
					<td>Comentario: <br>
						<Textarea name='mensaje' placeholder='Escribe un comentario'></Textarea>
					</td>
				</tr>
                <tr>
					<td>Campo oculto: <br>
						<input type='hidden' name='oculto' value='Valor oculto' >
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><br>
						<input type="submit" value="Enviar">
						<input type="reset" value="Borrar">
					</td>
				</tr>
			</table>
		</form>
	<footer>

	</footer>
</body>
</html>
